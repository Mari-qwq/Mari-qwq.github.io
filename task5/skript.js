let selectedPrice = 0;

function selectProduct(productId, price) {
    // Обновляем выбранную цену
    selectedPrice = price;

    // Удаляем класс "selected" со всех продуктов
    document.querySelectorAll('.product-item').forEach(item => item.classList.remove('selected'));

    // Добавляем класс "selected" к выбранному продукту
    event.currentTarget.classList.add('selected');
}

function calculateTotal() {
    const quantity = parseFloat(document.getElementById('quantity').value);
    const resultElement = document.getElementById('result');

    // Проверяем, является ли значение количества положительным целым числом
    if (quantity <= 0 || !Number.isInteger(quantity)) {
        resultElement.textContent = 'Ошибка: количество должно быть положительным целым числом.';
        resultElement.className = 'error';
        return;
    }

    // Проверяем, был ли выбран товар
    if (selectedPrice === 0) {
        resultElement.textContent = 'Ошибка: выберите товар.';
        resultElement.className = 'error';
        return;
    }

    // Рассчитываем общую стоимость
    const total = quantity * selectedPrice;

    // Выводим результат на страницу
    resultElement.textContent = 'Общая стоимость: ' + total + ' ₽';
    resultElement.className = '';
}
