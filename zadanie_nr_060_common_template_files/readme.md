## 🗂️ Zadanie nr 05 – Hierarchia plików szablonów w WordPressie

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
| `home.php`       | Szablon **strony bloga** (główna lista postów), gdy WordPress jest ustawiony na „Twoje najnowsze wpisy” lub wybrano stronę jako „Strona z wpisami” w ustawieniach czytania. |
| `page.php`       | Domyślny szablon pojedynczej **strony statycznej** (`Page`) – np. „O nas”, „Kontakt”. |
| `single.php`     | Szablon pojedynczego **wpisu na blogu** (`Post`). Jeśli istnieje `single-post.php`, zostanie użyty zamiast. |
| `archive.php`    | Szablon **archiwum**: kategorii, tagów, dat, autora, typu wpisu, itd. Używany, gdy nie ma bardziej szczegółowego szablonu (`category.php`, `tag.php`, `author.php` itd.). |
| `search.php`     | Szablon strony wyników **wyszukiwania** – kiedy użytkownik używa pola szukania w WordPressie. |
| `404.php`        | Szablon wyświetlany, gdy **żądana strona nie istnieje** (błąd 404). |

---

### 🧩 Ciekawostka

WordPress zawsze szuka najbardziej szczegółowego pasującego szablonu, a jeśli go nie znajdzie – schodzi po „drabinie rezerwowej”.  
Na końcu zawsze użyje `index.php` – to **absolutne minimum**, które musi być w każdym motywie.

---

### 📌 Zadanie

1. Utwórz pliki `home.php`, `page.php`, `single.php`, `archive.php`, `search.php`, `404.php` w katalogu motywu.
2. W każdym pliku dodaj testowy nagłówek, np.:

```php
<?php
echo 'To jest page.php';
```
   
### ⭐ Zadanie z gwiazdką – eksperyment z nazwami szablonów

WordPress pozwala tworzyć **bardziej szczegółowe szablony** z nazwami zawierającymi identyfikatory (`ID`) lub adresy (`slug`), które nadpisują ogólne pliki takie jak `archive.php`, `page.php`, `single.php`.

---

## 🧪 Spróbuj sam:

Utwórz poniższe pliki w katalogu motywu i zaobserwuj ich działanie:

- `author-1.php`  
  Używany tylko dla archiwum autora o ID `1`.

- `category-news.php`  
  Wyświetlany tylko dla kategorii o slug `news`.

- `page-o-nas.php`  
  Używany tylko dla strony statycznej o adresie `o-nas`.

- `single-post-moja-historia.php`  
  Tylko dla wpisu typu `post` i o slug `moja-historia`.

---

## 💡 Wskazówka

Aby sprawdzić, który plik template został użyty, dodaj na końcu pliku:

```php
<p>Template file: <?php global $template; echo wp_basename($template); ?></p>
```
