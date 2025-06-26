# 🧩 Zadanie nr 10 – `functions.php`, hooks, wczytujemy style

## 🎯 Cel

Poznać sposób, w jaki WordPress ładuje zewnętrzne pliki CSS oraz nauczyć się dodawać własne style za pomocą pliku `functions.php` i systemu hooków.

---

## 📁 Krok 1: Przenosimy CSS do osobnego pliku

1. W katalogu Twojego motywu utwórz nowy folder: `/assets/`
2. W środku utwórz plik: `main.css`
3. Skopiuj cały kod CSS, który wcześniej znajdował się bezpośrednio w pliku `template-parts/html-top.php`
4. Wklej ten kod do nowego pliku `main.css`
5. W `html-top.php` usuń całą sekcję `<style>...</style>`

---

## ❓ Pytanie

Plik `main.css` jest już gotowy, ale WordPress jeszcze go nie ładuje.

**Jak poinformować WordPressa, że ma załadować nasz zewnętrzny plik CSS do strony?**

## 🧰 Krok 2: Tworzymy plik `functions.php`

1. W głównym katalogu Twojego motywu (czyli tam, gdzie znajduje się `style.css` i `index.php`) utwórz nowy plik: `functions.php`.
2. Na początek wklej do niego dwie linijki kodu:

   ```php
   <?php
   if (!defined('ABSPATH')) { exit; }
   ```

 ## ℹ️ Co robi ten kod?

- `<?php` to otwarcie bloku PHP (konieczne w każdym pliku PHP).
- Linijka `if (!defined('ABSPATH')) { exit; }` sprawdza, czy stała `ABSPATH` jest zdefiniowana – a ta stała jest ustawiana tylko wtedy, gdy plik został załadowany w kontekście WordPressa.

**Jeśli ktoś spróbowałby uruchomić ten plik bezpośrednio przez przeglądarkę (np. `http://twojastrona.pl/wp-content/themes/nazwaszablonu/functions.php`) – WordPress nie działałby jeszcze, więc `ABSPATH` nie byłoby ustawione i wykonywanie pliku zostanie przerwane (pusta biała strona). SPRÓBUJ!**

---

## ✅ Dobra praktyka

Dodawanie powyższej linijki do każdego pliku `.php` w Twoim motywie (np. `header.php`, `footer.php`, `html-top.php`) to **proste zabezpieczenie**, które utrudnia nieautoryzowany dostęp do plików bez załadowania całego WordPressa.

---

## 🧠 Wyjaśnienie: Czym jest `functions.php` i jak działa `wp_head()`

Plik `functions.php` w motywie działa jak centrum dowodzenia – to miejsce, w którym możesz poinstruować WordPressa, co ma zrobić. Nie zmieniamy rdzenia WordPressa – zamiast tego korzystamy z tzw. **hooków** (haków), czyli punktów zaczepienia w kodzie WordPressa, które pozwalają dołączać własne funkcje.

W naszym przypadku chcemy dodać zewnętrzny plik CSS. Do tego posłużymy się hookiem `wp_enqueue_scripts`.

Dlaczego WordPress wie, gdzie ma dodać ten plik? Ponieważ w pliku `template-parts/html-top.php` użyta została funkcja `<?php wp_head(); ?>`. To właśnie w tym miejscu WordPress oraz wszystkie pluginy i motywy mogą dodawać swoje znaczniki, np. `<link>` z CSS, `<meta>` itd.

---

## 🛠️ Krok 3: Dodajemy hook do `functions.php`

1. W katalogu głównym Twojego motywu znajdź lub utwórz plik `functions.php`
2. Wklej do niego poniższy kod:

```php
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('main', get_theme_file_uri('/assets/main.css'));
});
```
3. Zapisz plik

### Co robi ten kod?

- `add_action('wp_enqueue_scripts', ...)` – mówi WordPressowi: *„Kiedy będziesz ładował style i skrypty, uruchom też tę funkcję.”*
- `'wp_enqueue_scripts'` – to nazwa hooka, który WordPress wywołuje podczas budowania strony (w miejscu `wp_head()`).
- `function() { ... }` – anonimowa funkcja (closure), którą WordPress uruchomi w odpowiednim momencie.
- `wp_enqueue_style()` – dodaje wskazany plik CSS do kolejki stylów.
- `'main'` – to unikalna nazwa (identyfikator) stylu; może być dowolna, ale nie może się powtarzać.
- `get_theme_file_uri('/assets/main.css')` – tworzy pełny adres URL do pliku `main.css` w katalogu Twojego motywu.

---

## 🔍 Krok 4: Sprawdzamy

1. Otwórz stronę główną w przeglądarce
2. Kliknij prawym przyciskiem myszy i wybierz opcję **„Pokaż źródło strony”**
3. W nagłówku strony (`<head>`) powinien pojawić się wpis:

```html
<link rel="stylesheet" id="main-css" href="https://.../wp-content/themes/wordcamp-2025/assets/main.css?ver=6.8.1' type='text/css' media='all' />
```

## 🧯 Krok 5: Problemy z cache CSS? Nieszczęśliwy Cache

Przeglądarki bardzo często **agresywnie cache’ują** pliki CSS, czyli zapamiętują ich wersję lokalnie, żeby szybciej ładować strony. Skutek? Zmienisz coś w `main.css`, ale nie zobaczysz od razu efektu, bo przeglądarka trzyma starą wersję.

Możemy to obejść, dodając tzw. **wersjonowanie pliku**. WordPress może automatycznie dorzucić do adresu pliku CSS parametr z numerem wersji – np. `main.css?ver=1720012943`. Dzięki temu przeglądarka rozpozna, że coś się zmieniło, i pobierze plik od nowa.

Zmieniamy kod w `functions.php` na:

```php
add_action('wp_enqueue_scripts', function() {
  wp_enqueue_style('main', get_theme_file_uri('/assets/main.css'), [], filemtime(get_theme_file_path('/assets/main.css')));
});
```

### Co robi ten kod?

- Trzy pierwsze argumenty funkcji `wp_enqueue_style()` są takie same:
  - `'main'` – unikalny identyfikator stylu
  - `get_theme_file_uri('/assets/main.css')` – adres URL do pliku CSS w katalogu motywu
  - `[]` – brak zależności (czyli ten styl nie potrzebuje, by inny styl był załadowany przed nim)

- `filemtime(get_theme_file_path('/assets/main.css'))`:
  - `get_theme_file_path('/assets/main.css')` – zwraca pełną ścieżkę do pliku na serwerze (na dysku)
  - `filemtime(...)` – pobiera czas ostatniej modyfikacji tego pliku (w formacie liczby – tzw. timestamp)
  - Ta liczba jest używana jako wersja stylu (`?ver=...`), więc gdy plik zostanie zmodyfikowany, adres URL się zmieni i przeglądarka załaduje nową wersję pliku

💡 Zobacz jak teraz wygląda linijka dodana do <head> 

