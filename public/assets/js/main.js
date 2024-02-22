function filters() {
    var minPrice, maxPrice, minYear, maxYear, minKm, maxKm, items, item;

    minPrice = parseFloat(document.getElementsByClassName("filter-field")[0].value);
    maxPrice = parseFloat(document.getElementsByClassName("filter-field")[1].value);
    minYear = parseFloat(document.getElementsByClassName("filter-field")[2].value);
    maxYear = parseFloat(document.getElementsByClassName("filter-field")[3].value);
    minKm = parseFloat(document.getElementsByClassName("filter-field")[4].value);
    maxKm = parseFloat(document.getElementsByClassName("filter-field")[5].value);

    if (isNaN(minPrice)) minPrice = 0;
    if (isNaN(maxPrice)) maxPrice = 0;
    if (isNaN(minYear)) minYear = 0;
    if (isNaN(maxYear)) maxYear = 0;
    if (isNaN(minKm)) minKm = 0;
    if (isNaN(maxKm)) maxKm = 0;

    items = document.getElementsByClassName("car-sale");
    for (var i = 0; i < items.length; i++) {
        item = items[i];
        var priceElement = item.querySelector(".car-price");
        var yearElement = item.querySelector(".car-year");
        var kmElement = item.querySelector(".car-km");

        var price = parseFloat(priceElement.textContent.replace("€", ""));
        var year = parseFloat(yearElement.textContent);
        var km = parseFloat(kmElement.textContent.split(" ")[0]);

        if (price >= minPrice && price <= maxPrice &&
            year >= minYear && year <= maxYear &&
            km >= minKm && km <= maxKm) {
            item.style.display = "";
        } else {
            item.style.display = "none";
        }
    }
}