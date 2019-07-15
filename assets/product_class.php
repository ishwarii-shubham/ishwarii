<?php
        include('DbConnect.php');
        class BaseController
        {
            public $dbConn;

            function __construct()
            {
                $db = new DbConnect;
                $this->dbConn = $db->connect();
            }
        }


		class Product extends BaseController {


			function show_product($id) {

				$stmt = $this->dbConn->prepare('SELECT
						a.id as product_id,
						product_name,
						description,
						properties,
						sub_type,
						min(price) as price,
						quantity,
						weight,
						image_url,
						d.sub_id as sub_id,
						image_type,
						(case when price = min(price) then d.id end)as price_id,
						b.status as status
					from
						product_details a,product_type b,prouct_images c,price_list d
					where
						b.id = :id and a.id = b.product_id and b.id = c.sub_id and d.sub_id = b.id
					group by
						a.id ,
						product_name,
						description,
						properties,
						sub_type,
						d.sub_id,
						quantity,
						weight,
						image_url,
						image_type,
						b.status');

        $stmt->bindParam(":id", $id);
        $stmt->execute();
				return $stmt;
			}


			function all_products() {
				$stmt = $this->dbConn->prepare('SELECT
						e.id as category_id,
						d.sub_id as sub_id,
						category_name,
            b.id as product_id,
						product_name,
						sub_type,
						image_url,
						b.status as status,
						min(price) as price,
						(case when price = min(price) then quantity end)as quantity,
						(case when price = min(price) then weight end)as weight,
						(case when price = min(price) then d.id end)as price_id
					from
						product_details a,product_type b,prouct_images c,price_list d, category e
					where
						a.status = 1 and c.image_type = \'BP\' and a.id = b.product_id and b.id = c.sub_id and e.id = a.category_id and d.sub_id = b.id
					group by
						e.id,
						d.sub_id,
						category_name,
            product_id,
						product_name,
						sub_type,
						image_url,
						b.status');
        // $stmt->bindParam(":id", $id);
        $stmt->execute();
				return $stmt;
			}

      // INDEX PAGE PRODUCT
      function landing_products() {
				$stmt = $this->dbConn->prepare('SELECT
						e.id as category_id,
						d.sub_id as sub_id,
						category_name,
						product_name,
						sub_type,
						image_url,
						b.status as status,
						min(price) as price,
						(case when price = min(price) then quantity end)as quantity,
						(case when price = min(price) then weight end)as weight,
						(case when price = min(price) then d.id end)as price_id
					from
						product_details a,product_type b,prouct_images c,price_list d, category e
					where
						a.status = 1 and c.image_type = \'BP\' and a.id = b.product_id and b.id = c.sub_id and e.id = a.category_id and d.sub_id = b.id and b.index_status = 1
					group by
						e.id,
						d.sub_id,
						category_name,
						product_name,
						sub_type,
						image_url,
						b.status');
        // $stmt->bindParam(":id", $id);
        $stmt->execute();
				return $stmt;
			}
		}


// Filter
		function create_filter($column, $value){
			return array($column => $value);
		}

// Column Values
		function get_column_values($stmt, $col){
			$res = get_unique_product($stmt, ['sub_id',$col]);
			$val = array();
			foreach ($res as $value) {
				$val[] = $value[$col];
				# code...
			}
			return $val;
		}


// Filter Data
		function filter_data($stmt, $column, $filter=null){
			if (!$filter){
				$id = get_unique_product($stmt, 'sub_id');
				$filter = create_filter('sub_id',[$id]);
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
		function get_unique_product($stmt, $column ,$filter = null){
			if(!$filter && !is_array($column)){
				return $stmt->fetch(PDO::FETCH_ASSOC)[$column];
			}
			else{
					if(!is_array($column)){
						return filter_data($stmt, $column, $filter)[0];
					}else{
						if(!$filter){
								return filter_data($stmt, $column, $filter);
						}else {
							return filter_data($stmt, $column);
						}

					}
			}

		}

		function get_all_products($stmt, $column){
			$filter = create_filter('status', [1]);
			return filter_data($stmt, $column, $filter);
		}


//Single Product Details
		function get_product_details($id){
			$result = array();
			$Product = new Product();
			$stmt = $Product->show_product($id);
			$filter = create_filter('sub_id',[$id]);
			$result['price_list'] = get_unique_product($stmt, ['price_id' ,'quantity', 'price', 'weight'], $filter);
			$stmt = $Product->show_product($id);
			$filter = create_filter('image_type', ['PP']);
			$result['banner'] = filter_data($stmt, 'image_url', $filter);
      $stmt = $Product->show_product($id);
      $filter = create_filter('image_type', ['BP']);
			$result['bp'] = filter_data($stmt, 'image_url', $filter)[0];
			$stmt = $Product->show_product($id);
			$result['product_name'] = get_unique_product($stmt, 'product_name');
			$result['product_description'] = get_unique_product($stmt, 'description');
			$result['product_properties'] = get_unique_product($stmt, 'properties');
			$stmt = $Product->show_product($id);
			$result['sub_type'] = get_unique_product($stmt, ['sub_type']);
			return $result;
		}


?>
