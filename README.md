## Demo

1. clone https://github.com/hafizhpratama-icube/jobseeker-test.git on your localhost.
2. import database goods.sql.

a. Make a CRUD of goods and prices with the following conditions
![image](https://user-images.githubusercontent.com/79433320/170823330-3fbb52a2-dc39-4e81-bc1f-e320e8ad2719.png)

Add data
![image](https://user-images.githubusercontent.com/79433320/170823340-7e6a59f9-6225-4bd1-b324-a96d7ec71f97.png)
![image](https://user-images.githubusercontent.com/79433320/170823341-5e81f000-87a6-4fc6-a02b-685e39e3c35f.png)

Edit data
![image](https://user-images.githubusercontent.com/79433320/170823350-6e28b5ca-7867-4d3c-8283-b620be039a59.png)
![image](https://user-images.githubusercontent.com/79433320/170823352-cd84d729-0304-4226-82e9-49dbb3335024.png)

Delete data
![image](https://user-images.githubusercontent.com/79433320/170823361-dcc86f9b-f76b-4195-b2ed-368993ba28a7.png)
Data with id 6 deleted.


b.	Make a MySQL database query to get the latest ending stock
First, please import database goods.sql

![image](https://user-images.githubusercontent.com/79433320/170823394-e88cbf74-3cc5-494f-aaab-05e51913d219.png)
![image](https://user-images.githubusercontent.com/79433320/170823398-8a91b1d4-5a54-4367-93c9-449713bb239e.png)

run this query:
```bash
SELECT inventory_code, final_stock FROM stock WHERE stock_code IN ( SELECT MAX(stock_code) FROM stock GROUP BY inventory_code ) ORDER BY inventory_code asc
```

3. Frontend test
You can see frontend test page on frontend.html file.

Desktop version
![Test Frontend](https://user-images.githubusercontent.com/79433320/170823459-2b676c40-96b2-4782-ae40-6360f584a8c2.png)

Mobile version
![Responsive](https://user-images.githubusercontent.com/79433320/170823476-2bbb37d1-0506-4536-8bbc-e2c9438b5225.png)
