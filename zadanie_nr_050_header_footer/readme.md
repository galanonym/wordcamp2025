## 🧱 Zadanie nr 050 – Modułowa budowa motywu WordPress

### 🌟 Cel

Rozdzielenie kodu HTML na mniejsze, zarządzalne części (moduły) i przygotowanie motywu do rozwoju.

---

## 🔹 Krok 1: Podział `index.php` na `header.php` i `footer.php`

### ✅ Co robimy:

- Wycinamy z `index.php` górną część HTML (`<!DOCTYPE html>` do `<body>`) do pliku `header.php`.
- Końcówkę HTML (`</body></html>`) przenosimy do `footer.php`.

### ✅ W `index.php` zostaje treść strony:

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

### ✅ Tworzymy folder:

```
/wp-content/themes/wordcamp-2025/template-parts/
```

### ✅ Przenosimy tam `header.php` i `footer.php`.

### ✅ Używamy:

```php
<?php get_template_part('template-parts/header'); ?>
<!-- treść -->
<?php get_template_part('template-parts/footer'); ?>
```

### 🧐 Co robi `get_template_part()`?

- Szuka i wczytuje plik o nazwie `nazwa.php` w podanej ścieże
- Większa elastyczność niż `get_header()` / `get_footer()`
- Pozwala tworzyć warianty np. `header-home.php`

---

## 🔹 Krok 3: Dodanie `top-menu.php`

### ✅ Tworzymy plik:

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
  padding: 0;
  margin: 0;
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
  border-radius: 4px;
}
```

### ✅ W `index.php`:

```php
<?php get_template_part('template-parts/top-menu'); ?>
```

---

## 🧐 Idea "klocków"

- `get_template_part()` pozwala budować motyw z modułów
- Różne części strony są oddzielnymi plikami: `banner.php`, `footer-menu.php`, `hero.php`
- Działa w każdym szablonie: `index.php`, `page.php`, `single.php`

---

## ⭐ Zadanie z gwiazdką: Więcej sekcji

### ✅ Dodaj pliki:

- `template-parts/banner.php`
- `template-parts/footer-menu.php`

---

## ✅ Podsumowanie

- Rozdzieliłeś kod na moduły
- Korzystasz z `get_template_part()`
- Motyw gotowy na rozbudowę i skalowanie

To fundament profesjonalnego motywu WordPress.

