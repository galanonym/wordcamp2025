## 🧱 Zadanie nr 05 – Modułowa budowa motywu WordPress

### 🌟 Cel

Rozdzielenie kodu HTML na mniejsze, zarządzalne części (moduły) i przygotowanie motywu do rozwoju.

---

## 🔹 Krok 1: Podział `index.php` na `header.php` i `footer.php`

### Co robimy:

- Wycinamy z `index.php` górną część HTML (`<!DOCTYPE html>` do `<body>` lub `<?php wp_body_open(); ?>`) do pliku `header.php`.
- Końcówkę HTML (`<?php wp_footer(); ?></body></html>`) przenosimy do `footer.php`.

### W `index.php` zostaje treść strony:

```php
<?php get_header(); ?>
<!-- treść strony -->
<?php get_footer(); ?>
```

### 🧐 Co robią te funkcje?

- `get_header()` – dołącza zawartość z `header.php`
- `get_footer()` – dołącza `footer.php`

---

## 🔹 Krok 2: Przeniesienie do `/template-parts/`

### Tworzymy folder:

```
/wp-content/themes/wordcamp-2025/template-parts/
```

### Przenosimy tam `header.php` i `footer.php`.

### Używamy:

```php
<?php get_template_part('template-parts/header'); ?>
<!-- treść -->
<?php get_template_part('template-parts/footer'); ?>
```

### 🧐 Co robi `get_template_part()`?

- Szuka i wczytuje plik o nazwie `nazwa.php` w podanej ścieżce
- Większa elastyczność niż `get_header()` / `get_footer()`
- Pozwala tworzyć warianty np. `header-home.php`

### Sprzątamy!

Zmieńmy nazwy plików `header.php` na `html-top.php` oraz `footer.php` na `html-bottom.php`.

Dlaczego to dobry pomysł?

---

## 🔹 Krok 3: Dodanie `top-menu.php`

### Tworzymy plik:

```
template-parts/top-menu.php
```

Zawartość przykładowa:

```html
<nav class="top-menu">
  <ul>
    <li><a href="/">Strona główna</a></li>
    <li><a href="/o-nas">O nas</a></li>
    <li><a href="/kontakt">Kontakt</a></li>
  </ul>
</nav>
```

```css
.top-menu ul {
  display: flex;
  gap: 20px;
  list-style: none;
  margin: 20px 0px 40px 0px;
  justify-content: center;
}

.top-menu li a {
  text-decoration: none;
  color: #222;
  font-weight: bold;
  padding: 10px 15px;
  transition: background-color 0.3s ease;
}

.top-menu li a:hover {
  background-color: #ddd;
  border-radius: 6px;
}
```

CSS możemy dodać w globalnym `html-top.php` lub bezpośrednio w pliku `top-menu.php` w tagu `<style>`. Jakie zalety ma druga opcja?

### W `index.php`:

```php
<?php get_template_part('template-parts/top-menu'); ?>
```

---

## 🧐 Idea "klocków"

- `get_template_part()` pozwala budować motyw z modułów
- Różne części strony są oddzielnymi plikami: `banner.php`, `footer-menu.php`, `hero.php`
- Działa w każdym szablonie: `index.php`, `page.php`, `single.php`

---

## Dzielimy dalej!

Przenieś cały kod z index.php do nowych plików w /template-parts/ dla każdej sekcji

- `template-parts/html-top.php`
- `template-parts/hero.php`
- `template-parts/top-menu.php`
- `template-parts/introduction.php`
- `template-parts/footer.php`
- `template-parts/html-bottom.php`

Co zostało w `index.php`?

## ✅ Podsumowanie

- Rozdzieliłeś kod na moduły
- Korzystasz z `get_template_part()`
- Motyw gotowy na rozbudowę i skalowanie

To fundament profesjonalnego motywu WordPress.

## ⭐ Zadanie z gwiazdką: Więcej sekcji

### Dodaj sekcje i ich zawartość, np.:

- Baner promocyjny
- Pasek ogłoszeń
- Ciekawe linki
- Galeria obrazów
- Formularz kontaktowy
- Ikony mediów społecznościowych
- Opinie klientów
- Lista cech produktu/usługi
- Lista usług
- Aktualności lub blog
- Wideo lub sekcja z filmem
- Najczęstsze pytania (FAQ)
- Call to Action (CTA)
- Logotypy partnerów
- Licznik do wydarzenia

### Odpowiedz na pytanie: Czym róźnią się funkcje `wp_footer()` oraz `get_footer()`?
---
