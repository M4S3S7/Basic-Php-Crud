# Welcome PHP Crud example

Hello, post and get requests are made for this CRUD prepared for **bynogame**. You can set up with examples and tables. It is written using the MVC desing pattern.


# Post /stock

Send json in Post method Body. (No value can be left blank)

| product_id | int(11) |
|--|--  |
| name |  varchar(120) |
|stock  | int(11) |
|created_date| date time|
|  |  |
Result Json last insert product_id :

    {
	"code": "0",
	"msg": "success",
	"data": [
			{
			"name": "BNG Product",
			"stock": "35",
			"created_date": "2020-10-07",
			"product_id": "11"
			}
		]
	}

## GET /stock

If you send a get request all of the stock data is json result
example :


    {
	"code": "0",
	"msg": "success",
	"data": [
			{
			"name": "BNG Product",
			"stock": "35",
			"created_date": "2020-10-07",
			"product_id": "11"
			},
			{
			"name": "BNG2 Product",
			"stock": "83",
			"created_date": "2020-10-07",
			"product_id": "12"
			}
		]
	}
