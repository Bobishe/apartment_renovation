<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">

                <div class="card-body">
                    <form id="callbackForm" method="POST" action="/send-callback">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Ваше имя</label>
                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Введите ваше имя">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Телефон</label>
                            <input type="tel" class="form-control" id="phone" name="phone"
                                placeholder="Введите ваш телефон">
                        </div>
                        <div class="mb-3">
                            <label for="type" class="form-label">Тип замера</label>
                            <select class="form-select" id="type" name="type">
                                <option value="дом">Дом</option>
                                <option value="квартира">Квартира</option>
                                <option value="офис">Офис</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Сообщение</label>
                            <textarea class="form-control" id="message" name="message" rows="3" placeholder="Сообщение"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Отправить</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
