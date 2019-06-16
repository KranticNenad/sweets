function getItems() {
    fetch(BASE + 'api/cart', { credentials : 'include' })
        .then(result => result.json())
        .then(data => {
            displayItems(data.items);
        });
}

function addItem(slatkisId) {
    fetch(BASE + 'api/cart/add/' + slatkisId, { credentials : 'include' })
    .then(result => result.json())
    .then(data => {
        if (data.error === 0){
            getItems();
        }
    });
}

function clearItems () {
    fetch(BASE + 'api/cart/clear', { credentials : 'include' })
        .then(result => result.json())
        .then(data => {
            if (data.error === 0){
                getItems();
            }
        });
}

function displayItems (items) {
    const itemsDiv = document.querySelector('.cart');
    itemsDiv.innerHTML = '';

    if (items.length === 0){
        itemsDiv.innerHTML = 'Prazna korpa';
        return;
    }

    const cartTitle = document.createElement('a');
    cartTitle.innerHTML = 'korpa:';
    cartTitle.href = BASE + 'korpa';

    itemsDiv.appendChild(cartTitle);

    for (item of items){
        const itemLink = document.createElement('a');
        itemLink.innerHTML = item.naziv;
        itemLink.href = BASE + 'slatkis/' + item.slatkis_id;

        itemsDiv.appendChild(itemLink);
    }
}

addEventListener('load', getItems);