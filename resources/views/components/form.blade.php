<div class="container my-5">
    <h2 class="text-center text-danger fw-bold mb-4">ОСТАВИТЬ ЗАЯВКУ</h2>
    <form action="#" method="post" class="w-md-50 mx-auto">
        <div class="mb-3">
            <label for="name" class="form-label">Ваше имя</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Введите ваше имя"
                required>
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Телефон</label>
            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Введите ваш телефон"
                required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Тип замера</label>
            <select class="form-select" id="type" name="type" required>
                <option value="" disabled selected>--Выбрать--</option>
                <option value="kvartira">Квартира</option>
                <option value="komnata">Комната</option>
                <option value="sanuzel">Санузел</option>
                <option value="dom">Дом</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Сообщение</label>
            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Сообщение"></textarea>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg">Отправить</button>
        </div>
    </form>
</div>
