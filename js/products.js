function filterProducts() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const catalog = document.getElementById('catalogContainer');
    const products = catalog.getElementsByClassName('top-p');

    for (let i = 0; i < products.length; i++) {
        const product = products[i];
        const productName = product.getAttribute('data-name').toLowerCase();

        if (productName.includes(filter)) {
            product.style.display = '';
        } else {
            product.style.display = 'none';
        }
    }
}