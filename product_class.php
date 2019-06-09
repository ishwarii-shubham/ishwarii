<?php require_once('BaseController.php');

		class Product extends BaseController {


			function show_product($id) {

				$stmt = $this->dbConn->prepare('SELECT
						a.id as product_id,
						product_name,
						description,
						properties,
						sub_type,
						price,
						quantity,
						weight,
						image_url,
						d.sub_id as sub_id,
						image_type,
						d.id as price_id
					from
						product_details a,product_type b,prouct_images c,price_list d where a.id = :id and a.id = b.product_id and b.id = c.sub_id
					group by
						a.id ,
						product_name,
						description,
						properties,
						sub_type,
						d.sub_id,
						price,
						quantity,
						weight,
						image_url,
						image_type,
						d.id');

        $stmt->bindParam(":id", $id);
        $stmt->execute();
				return $stmt;
			}


			function all_products() {
				$stmt = $this->dbConn->prepare('SELECT
						d.sub_id as sub_id,
						product_name,
						sub_type,
						price,
						quantity,
						weight,
						image_url,
						d.id as price_id
					from
						product_details a,product_type b,prouct_images c,price_list d where a.status = 1 and c.image_type = \'BP\'and a.id = b.product_id and b.id = c.sub_id
					group by
						d.sub_id,
						product_name,
						sub_type,
						price,
						quantity,
						weight,
						image_url');
        // $stmt->bindParam(":id", $id);
        $stmt->execute();
				return $stmt;
			}
		}


// Filter
		function create_filter($column, $value){
			return array($column => $value);
		}



// Filter Data
		function filter_data($stmt, $column, $filter=null){
			if (!$filter){
				$id = get_value($stmt, 'sub_id');
				$filter = create_filter('sub_id', [$id]);
			}
			$filter_column = key($filter);
			$result = array();
			while($row=$stmt->fetch(PDO::FETCH_ASSOC)) {
				$value = $filter[$filter_column];
				if(in_array($row[$filter_column], $value)) {
					// if multiple values
					if (is_array($column)){
						$val = array();
						// print_r($stmt);
						foreach($column as $col){
							$val[$col] = $row[$col];
						}
						$result[] = $val;
						// $result = array_unique($result,SORT_REGULAR);
					}else{
						$result[] = $row[$column];
					}
				}
			}
			$result = array_unique($result, SORT_REGULAR);
			return $result;
		}


// Get value with filters
		function get_value($stmt, $column ,$filter = null){
			if(!$filter && !is_array($column)){
				return $stmt->fetch(PDO::FETCH_ASSOC)[$column];
			}
			else{
					if(!is_array($column)){
						return filter_data($stmt, $column, $filter)[0];
					}else{
						return filter_data($stmt, $column);
					}
			}

		}


//Single Product Details
		function get_product_details($id){
			$result = array();
			$Product = new Product();
			$stmt = $Product->show_product($id);
			$filter = create_filter('image_type', ['PP']);
			$result['product_name'] = get_value($stmt, 'product_name');
			$result['product_description'] = get_value($stmt, 'description');
			$result['product_properties'] = get_value($stmt, 'properties');
			$result['sub_type'] = get_value($stmt, ['sub_type']);
			$stmt = $Product->show_product($id);
			$result['price_list'] = get_value($stmt, ['price_id' ,'quantity', 'price', 'weight']);
			$stmt = $Product->show_product($id);
			$result['banner'] = filter_data($stmt, 'image_url', $filter);
			return $result;
		}


?>
