let selectedPrice = 0;

// Обработчик выбора продукта
function selectProduct(event) {
    const productItem = event.currentTarget;
    const price = parseFloat(productItem.dataset.price);

    // Обновляем выбранную цену
    selectedPrice = price;

    // Удаляем класс "selected" со всех продуктов
    document.querySelectorAll('.product-item').forEach(item => item.classList.remove('selected'));

    // Добавляем класс "selected" к выбранному продукту
    productItem.classList.add('selected');
}

// Обработчик расчета стоимости
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

// Навешиваем обработчики событий на элементы
document.addEventListener('DOMContentLoaded', () => {
    // Добавляем обработчики клика на продукты
    document.querySelectorAll('.product-item').forEach(item => {
        item.addEventListener('click', selectProduct);
    });

    // Добавляем обработчик клика на кнопку
    document.getElementById('calculate-button').addEventListener('click', calculateTotal);
});
