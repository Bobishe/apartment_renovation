<style>
    .alert-success {
        position: fixed;
        top: 20px;
        right: 20px;
        z-index: 1050;
        display: none;
        /* Скрываем алерт по умолчанию */
    }
</style>

<div id="successAlert" class="alert alert-success" role="alert">
    Ваше сообщение успешно отправлено!
</div>

<div class="modal fade" id="callbackModal" tabindex="-1" aria-labelledby="callbackModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="callbackModalLabel">Заказать обратный звонок</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
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



<script>
    document.getElementById('callbackForm').addEventListener('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        fetch('/send-callback', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }
            }).then(response => response.json())
            .then(data => {
                // Очищаем форму
                document.getElementById('callbackForm').reset();

                // Закрываем модальное окно
                let modal = bootstrap.Modal.getInstance(document.getElementById('callbackModal'));
                modal.hide();

                // Показываем алерт об успехе
                let successAlert = document.getElementById('successAlert');
                successAlert.innerHTML = data.message; // Устанавливаем текст сообщения
                successAlert.style.display = 'block'; // Показываем алерт

                // Прячем алерт через 5 секунд
                setTimeout(function() {
                    successAlert.style.display = 'none';
                }, 5000);
            }).catch(error => {
                alert('Ошибка отправки сообщения');
            });
    });
</script>
