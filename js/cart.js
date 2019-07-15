simpleCart.currency({
  code: "INR" ,
  symbol: "₹" ,
  name: "Indian Rupee"
});

simpleCart({
	// array representing the format and columns of the cart,
	// see the cart columns documentation
	cartColumns: [
		{ attr: "name", label: "Name"},
    { attr: "id", label: "ID"},
    { attr: "bp", label: false, view: "image"},
    { attr: "weight", label: "Weight"},
		{ view: "currency", attr: "price", label: "Price"},
		{ view: "decrement", label: false, text: "-"},
		{ attr: "quantity", label: "Qty"},
		{ view: "increment", label: false, text: "+"},
		{ view: "currency", attr: "total", label: "SubTotal" },
		{ view: "remove", text: "Remove", label: false}
	],

	// "div" or "table" - builds the cart as a
	// table or collection of divs
	cartStyle: "table",

	// how simpleCart should checkout, see the
	// checkout reference for more info
	checkout: {
		type: "PayPal" ,
		email: "you@yours.com"
	},

	// set the currency, see the currency
	// reference for more info
	currency: "INR",

	// collection of arbitrary data you may want to store
	// with the cart, such as customer info
	data: {},

	// set the cart langauge
	// (may be used for checkout)
	language: "english-us",

	// array of item fields that will not be
	// sent to checkout
	excludeFromCheckout: [],

	// custom function to add shipping cost
	shippingCustom: null,

	// flat rate shipping option
	shippingFlatRate: 0,

	// added shipping based on this value
	// multiplied by the cart quantity
	shippingQuantityRate: 0,

	// added shipping based on this value
	// multiplied by the cart subtotal
	shippingTotalRate: 0,

	// tax rate applied to cart subtotal
	taxRate: 0,

	// true if tax should be applied to shipping
	taxShipping: false,

	// event callbacks
	beforeAdd			: null,
	afterAdd			: null,
	load				: null,
	beforeSave		: null,
	afterSave			: null,
	update			: null,
	ready			: null,
	checkoutSuccess	: null,
	checkoutFail		: null,
	beforeCheckout		: null,
        beforeRemove           : null
});
