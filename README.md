# task-list
 - сделал модель Task
 - сделал seeder для заполнения БД данными
 - Сделал кастомные Requst для описания валидации данными
 - Сделал ресурсный контроллер TaskController для работы с моделю Task
 - Вынес весь код в папку Services/TaskServices, чтобы разгрузить контроллер

## Доступен следующий список роутов
- GET index http://127.0.0.1:8000/api/tasks
- POST store http://127.0.0.1:8000/api/tasks
```json
{
    "title": "some title",
    "description": "some description",
    "status": "pending",
    "deadline": "2024-07-16"
}
```
- GET show http://127.0.0.1:8000/api/tasks/:task, где :task - id параметр задачи
- PATCH update http://127.0.0.1:8000/api/tasks/:task, где :task - id параметр задачи
```json
{
    "title" : "Some title 1"
}
```
- DELETE destroy http://127.0.0.1:8000/api/tasks/:task, где :task - id параметр задачи
- GET search http://127.0.0.1:8000/api/search/tasks?status=pending&deadline=2024-07-18, где можно передать 
