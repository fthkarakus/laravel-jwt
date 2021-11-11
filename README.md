<b>Endpoint url:</b>
<ul>
    <li>Register User http://127.0.0.1:8080/api/register
        <ul>
        <li>Method : POST</li>
        <li>JSON Body Parameter: name, email, password</li>
        </ul>
    </li>
<li>Login User http://127.0.0.1:8080/api/login
        <ul>
        <li>Method : POST</li>
        <li>JSON Body Parameter: email, password</li>
        </ul>
    </li>
<li>Logout User http://127.0.0.1:8080/api/logout
        <ul>
        <li>Method : GET</li>
        <li>JSON Body Parameter: token</li>
        </ul>
    </li>
<li>Get User http://127.0.0.1:8080/api/get_user
        <ul>
        <li>Method : GET</li>
        <li>Headers Parameter: Authorization => Bearer ...token</li>
        </ul>
    </li>
<li>Get All Products (adding your user) http://127.0.0.1:8080/api/products
        <ul>
        <li>Method : GET</li>
        <li>Headers Parameter: Authorization => Bearer ...token</li>
        </ul>
    </li>
<li>Get product by product_id http://127.0.0.1:8080/api/products/1
        <ul>
        <li>Method : GET</li>
        <li>Headers Parameter: Authorization => Bearer ...token</li>
        </ul>
    </li>
<li>Create product http://127.0.0.1:8080/api/create
        <ul>
        <li>Method : POST</li>
        <li>Headers Parameter: Authorization => Bearer ...token</li>
        <li>JSON Body Parameter: name, sku, price(int), quantity(int)</li>
        </ul>
    </li>
<li>Update product http://127.0.0.1:8080/api/update/2
        <ul>
        <li>Method : PUT</li>
        <li>Headers Parameter: Authorization => Bearer ...token</li>
        <li>JSON Body Parameter: name, sku, price(int), quantity(int)</li>
        </ul>
    </li>
<li>Delete product http://127.0.0.1:8080/api/delete/2
        <ul>
        <li>Method : DELETE</li>
        <li>Headers Parameter: Authorization => Bearer ...token</li>
        </ul>
    </li>
</ul>
