document.addEventListener("DOMContentLoaded", () => {
    const quantityInput = document.getElementById("quantity");
    const serviceTypeRadios = document.querySelectorAll('input[name="servicetype"]');
    const productOptions = document.getElementById("productOptions");
    const flavorSelect = document.getElementById("flavor");
    const boxCheckbox = document.getElementById("box");
    const resultElement = document.getElementById("result");

    let selectedPrice = 0; // Цена выбранного товара
    let selectedProductId = null; // ID выбранного товара

    const productData = {
        eclair: { price: 120, flavors: ["Ваниль", "Шоколад", "Клубника"], hasPackaging: false },
        mochi: { price: 160, flavors: ["Ваниль", "Шоколад", "Клубника"], hasPackaging: true },
        madlen: { price: 60, flavors: [], hasPackaging: false },
        macaroon: { price: 155, flavors: ["Ваниль", "Шоколад", "Клубника"], hasPackaging: true },
        donut: { price: 130, flavors: ["Ваниль", "Шоколад", "Клубника"], hasPackaging: true },
        strawberry: { price: 110, flavors: [], hasPackaging: true },
    };
    const flavorKoef = {
        "Ваниль": 1,
        "Шоколад": 1.25,
        "Клубника": 1.5,
    };

    // Функция обновления дополнительных параметров для выбранного товара
    function updateProductOptions(productId) {
        const product = productData[productId];

        // Обновляем список вкусов
        flavorSelect.innerHTML = "";
        if (product.flavors.length > 0) {
            product.flavors.forEach(flavor => {
                const option = document.createElement("option");
                option.value = flavor;
                option.textContent = flavor;
                flavorSelect.appendChild(option);
            });
            productOptions.style.display = "block";
        } else {
            productOptions.style.display = "none";
        }

        // Отображение/скрытие чекбокса упаковки
        if (product.hasPackaging) {
            document.getElementById("checklenta").style.display = "block";
        } else {
            document.getElementById("checklenta").style.display = "none";
            boxCheckbox.checked = false;
        }

        // Пересчитываем стоимость при изменении параметров
        calculateTotal();
    }

    // Функция обработки клика на товар
    function selectProduct(event) {
        const productItem = event.currentTarget;
        const productId = productItem.dataset.id;

        selectedPrice = parseFloat(productItem.dataset.price);
        selectedProductId = productId;

        // Убираем выделение с других товаров
        document.querySelectorAll(".product-item").forEach(item => item.classList.remove("selected"));
        productItem.classList.add("selected");

        // Обновляем параметры выбранного товара
        updateProductOptions(productId);
    }

    // Функция расчета стоимости
    function calculateTotal() {
        const quantity = parseFloat(quantityInput.value, 10);
        const servicePrice = parseInt(document.querySelector('input[name="servicetype"]:checked').value, 10);
        const boxPrice = boxCheckbox.checked ? 50 : 0; // Стоимость упаковки
        const flavor = flavorSelect.value;

        if (quantity <= 0 || !Number.isInteger(quantity)) {
            resultElement.textContent = "Ошибка: введите корректное количество!";
            resultElement.className = "error";
            return;
        }

        if (!selectedProductId) {
            resultElement.textContent = "Ошибка: выберите товар!";
            resultElement.className = "error";
            return;
        }

        const flavorCoefficient = flavorKoef[flavor] || 1; // Используем коэффициент вкуса, если выбран
        const total = quantity * selectedPrice * flavorCoefficient + servicePrice + boxPrice;
        const product = productData[selectedProductId];
const flavorText = product.flavors.length > 0 ? ` (Вкус: ${flavor})` : "";

resultElement.textContent = `Стоимость заказа: ${total} руб.${flavorText}`;
resultElement.className = "";
    }

    // Привязываем события
    document.querySelectorAll(".product-item").forEach(item => {
        item.addEventListener("click", selectProduct);
    });

    quantityInput.addEventListener("input", calculateTotal);
    serviceTypeRadios.forEach(radio => radio.addEventListener("change", calculateTotal));
    flavorSelect.addEventListener("change", calculateTotal);
    boxCheckbox.addEventListener("change", calculateTotal);
});
