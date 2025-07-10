<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Endpoints

### Category
- `GET /api/categories` – výpis všech kategorií ✅
- `POST /api/categories` – vytvoření nové kategorie (parametr: `name`) ✅

### Tasks
- `GET /api/tasks` – výpis všech úkolů včetně názvu kategorie ✅
- `POST /api/tasks` – vytvoření nového úkolu (parametry: `title`, `category_id`) ✅
- `PATCH /api/tasks/{id}` – označení úkolu jako hotového (`done = true`) ✅
- `DELETE /api/tasks/{id}` – smazání úkolu ✅

## Další implementace
- JSON formátované výstupy
- Validace
- Eloquent modely
- Laravel Resources
- Seedery s ukázkovými daty
- Jednotkové testy
- Filtrace úkolů
  - `GET /api/tasks?categoryId[eq]=2` - výpis úkolů s categoryId=2
  - `GET /api/tasks?done[eq]=1` - výpis hotových úkolů
