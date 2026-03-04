//Yassir Hassan
//25/28215
document.addEventListener("DOMContentLoaded", function () {
    console.log("JS working");
    const quantity = document.getElementById("quantity");
    const price = document.getElementById("price");
    const totalDisplay = document.getElementById("totalDisplay");
    const totalInput = document.getElementById("total");

    function calculateTotal() {
        let q = parseFloat(quantity.value) || 0;
        let p = parseFloat(price.value) || 0;
        let total = q * p;

        totalDisplay.textContent = total;
        totalInput.value = total;
    }

    quantity.addEventListener("input", calculateTotal);
    price.addEventListener("input", calculateTotal);
});