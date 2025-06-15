## 🗂️ Zadanie nr07 – Hierarchia plików szablonów w WordPressie

### 🎯 Cel

Zrozumienie, w jaki sposób WordPress wybiera odpowiedni plik szablonu (`*.php`) do wyświetlenia różnych typów treści: strony, wpisu, archiwum, wyszukiwarki, błędu 404 itd.

---

### 🧭 Oficjalna mapa hierarchii szablonów

Pełen diagram:

![Hierarchia szablonów WordPress (Template Hierarchy)](https://i0.wp.com/developer.wordpress.org/files/2014/10/Screenshot-2019-01-23-00.20.04.png)

Jeśli nie działa link, przejdź na:
`https://developer.wordpress.org/themes/basics/template-hierarchy/`

---

### 🔑 Podstawowe pliki szablonów

| Plik            | Opis |
|------------------|------|
| `front-page.php` | Szablon **strony głównej**, gdy w ustawieniach WordPressa wybrano statyczną stronę jako „Strona główna”. Ma najwyższy priorytet przed `home.php` i `page.php`. |
| `page.php`       | Domyślny szablon pojedynczej **strony statycznej** (`Page`) – np. „O nas”, „Kontakt”. |
| `single.php`     | Szablon pojedynczego **wpisu na blogu** (`Post`). Jeśli istnieje `single-post.php`, zostanie użyty zamiast. |
| `archive.php`    | Szablon **archiwum**: kategorii, tagów, dat, autora, typu wpisu, itd. Używany, gdy nie ma bardziej szczegółowego szablonu (`category.php`, `tag.php`, `author.php` itd.). |
| `404.php`        | Szablon wyświetlany, gdy **żądana strona nie istnieje** (błąd 404). |

---

### 🧩 Ciekawostka

WordPress zawsze szuka najbardziej szczegółowego pasującego szablonu, a jeśli go nie znajdzie – schodzi po „drabinie rezerwowej”.  
Na końcu zawsze użyje `index.php` – to **absolutne minimum**, które musi być w każdym motywie.

---

### 📌 Zadanie

1. Utwórz pliki `front-page.php`, `page.php`, `single.php`, `archive.php`, `404.php` w katalogu motywu.
2. Tymczasowo możesz każdym pliku dodać testowy kod HTML, np.:

```html
<b>To jest page.php!</b>
```
3. Przetestuj poprzez WordPress Admin, np. przez przycisk `View`
4. Poskładaj każdą z tych stron z wcześniej przygotowanych `/template-parts/`
5. W `index.php` usuń zawartość i dodaj ostrzeżenie, że w sumie tu nigdy nie powinniśmy trafić :)

## 💡 Wskazówka

Aby sprawdzić, który plik template został użyty, dodaj na końcu pliku, lub nawet lepiej, jako osobny plik `template-parts/debug.php`:

```php
<small>Template file: <b><?php global $template; echo wp_basename($template); ?></b></small>
```
   
## ⭐ Zadanie z gwiazdką – eksperyment z nazwami szablonów

Kiedy testujesz `Page` oraz `Post`, chyba brakuje tytułu strony? Dodaj nowy `template-parts` o nazwie `title.php` i użyj funkcji `<?php the_title(); ?>`

Jeśli dasz radę możesz w `title.php` wyświetlić jeszcze datę, nazwisko autora itd.
