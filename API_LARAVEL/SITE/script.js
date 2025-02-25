        function fetchProducts() {
            fetch('http://127.0.0.1:8000/api/produtos')
            .then(response => response.json())
            .then(products => {
                // Função para renderizar os produtos na página
                renderProducts(products);
            })
            .catch(error => {
                console.error('Erro ao obter os produtos:', error);
            });
        }

        // Função para renderizar os produtos na página
        function renderProducts(products) {
            const productList = document.getElementById('product-list');

            products.onclic(product => {
                const productDiv = document.createElement('div');
                productDiv.innerHTML = `
                    <h2>${product.name}</h2>
                    <p>Preço: R$ ${product.price.toFixed(2)}</p>
                `;
                productList.appendChild(productDiv);
            });
        }