# 🧩 Zadanie nr 11 - Pomysły na dalsze kroki

## 🎯 Cel

W tym zadaniu nie budujemy jednego konkretnego widoku - zamiast tego zebraliśmy kilka dodatkowych pomysłów i technik, które możesz wdrożyć samodzielnie. To doskonała okazja, żeby poeksperymentować, rozbudować swój motyw i utrwalić wcześniejsze umiejętności.

Poniżej znajdziesz luźną listę propozycji - możesz je realizować w dowolnej kolejności lub wybrać tylko te, które Cię najbardziej interesują.

---

### 🔹 Własne, bardziej złożone sekcje w `template-parts/`

**Cel:** Nauczyć się, jak dzielić kod HTML/PHP na komponenty i wielokrotnie je wykorzystywać.

Dodaj nowe pliki w `template-parts/`, np.:

- `feature-box.php`
- `pricing-table.php`
- `testimonial.php`

W szablonie głównym (`front-page.php`, `page.php`) załaduj je funkcją `get_template_part('template-parts/feature-box')`.

Dzięki temu uczestnik:

- nauczy się tworzyć wielokrotnego użytku komponenty widoku,
- pozna praktykę organizowania szablonu w logiczne sekcje,
- będzie mógł budować rozbudowane layouty w przejrzysty sposób.

---

### 🔹 Dodajemy obrazek w tle do `hero.php`

**Cel:** Poznać sposób wstawiania ścieżek do plików multimedialnych motywu w kodzie HTML.

W pliku `template-parts/hero.php` dodaj tło w CSS, korzystając z funkcji `get_theme_file_uri()` oraz `esc_url()`:

```php
<style>
.hero {
  background-image: url('<?php echo esc_url(get_theme_file_uri('/assets/hero.jpg')); ?>');
}
</style>
```

Dzięki temu uczestnik nauczy się:

- jak dynamicznie odwoływać się do plików z katalogu motywu,
- jak zabezpieczyć ścieżkę URL przy pomocy `esc_url()`,
- jak wprowadzać tła graficzne z poziomu PHP/CSS.

---

### 🔹 Tworzymy własny page template

**Cel:** Zrozumieć, jak przypisać konkretny szablon do wybranej podstrony WordPressa.

Stwórz nowy plik w katalogu głównym motywu, np. `template-about.php`, i dodaj na jego początku specjalny komentarz:

```php
<?php
/*
Template Name: O nas
*/
```

Następnie dodaj do pliku prosty kod HTML/PHP, np. `get_header()`, jakiś tekst, i `get_footer()`.

Po zapisaniu pliku możesz w panelu WordPressa edytować dowolną stronę i przypisać do niej właśnie ten szablon. WordPress zacznie renderować tę podstronę według Twojego własnego widoku.

Dzięki temu uczestnik nauczy się:

- jak tworzyć szablony przypisane do konkretnych stron,
- jak rozdzielać strukturę HTML różnych podstron,
- jak sterować layoutem wybranych widoków w bardziej elastyczny sposób.

---

### 🔹 Modułowe „mini-pluginy” w `/inc/`

**Cel:** Rozbudować dobre nawyki organizowania kodu i pokazać, jak tworzyć małe modyfikacje działania WordPressa.

Dodaj w katalogu `/inc/` nowe pliki PHP z prostymi funkcjami, które będą coś zmieniać w działaniu WordPressa, np.:

- `debug-footer.php` – dodaje komunikat w stopce, np. `echo '<p>Debug mode</p>';` w `wp_footer`
- `disable-autosave.php` – wyłącza autozapis i wersje robocze, np. filtrem lub `remove_action()`

Następnie w `functions.php` dodaj linię `require_once` do każdego z tych plików.

Dzięki temu uczestnik:

- nauczy się rozdzielać funkcje na osobne moduły,
- zobaczy, jak WordPress może być modyfikowany bez wtyczek,
- pozna dobre praktyki pisania czystego i modularnego kodu.

---

### ⭐ Zadanie dodatkowe: Pomysły na kolejne eksperymenty

- Dodaj faviconę do motywu
- Załaduj dodatkowy font z Google Fonts
- Stwórz plik `404.php` z własnym komunikatem
- Dodaj własną klasę CSS do body za pomocą filtra `body_class`
- Zarejestruj nowe menu i wyświetl je w `footer.php`
- Dodaj sekcję „O autorze” pod każdym wpisem
- Wstaw dynamiczną datę ostatniej modyfikacji posta
- Zrób shortcode, który wyświetla przycisk CTA
- Dodaj filtr, który zmienia tytuł wpisu na wersję z emoji 😎

