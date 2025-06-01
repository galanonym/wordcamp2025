## 🔌 Zadanie nr 04 – Integracja z WordPressem: obowiązkowe i zalecane tagi PHP

### 🎯 Cel

Zintegrować naszą strukturę HTML+CSS z systemem WordPress, dodając obowiązkowe funkcje PHP, które umożliwiają działanie wtyczek, dynamicznych treści oraz zapewniają zgodność z motywami potomnymi i SEO.

---

### ✅ Obowiązkowe tagi (must-have)

| Funkcja             | Gdzie w HTML                | Opis |
|---------------------|-----------------------------|------|
| `<?php wp_head(); ?>`         | tuż przed `</head>`          | Wczytuje style, skrypty, metatagi wtyczek i rdzenia WordPress |
| `<?php wp_body_open(); ?>`    | zaraz po `<body>`            | Wtyczki mogą dodać kod np. do dostępności lub narzędzi UX |
| `<?php wp_footer(); ?>`       | tuż przed `</body>`          | Wczytuje skrypty JavaScript i analitykę zarejestrowaną przez WP/wtyczki |

---

### 🧩 Zadanie z gwiazdką ⭐

> Co się stanie, jeśli użyjesz tylko `<?php wp_head(); ?>`, a pominiesz `wp_footer()` i `wp_body_open()`?

Spróbuj:
- Pominąć `wp_footer()` i sprawdzić konsolę przeglądarki
- Porównać kod źródłowy strony przed i po
- Sprawdzić, czy działają skrypty JS lub wtyczki (np. Google Analytics)

**Podpowiedź:**  
Brak `wp_footer()` uniemożliwia ładowanie JS rejestrowanych przez WP i wtyczki.  
Brak `wp_body_open()` może zablokować niektóre mechanizmy dostępności lub integracje UX.

---

### 👍 Dobre praktyki – zalecane funkcje

| Funkcja                           | Gdzie w HTML                | Opis |
|----------------------------------|-----------------------------|------|
| `<?php language_attributes(); ?>`| w tagu `<html>`             | Dodaje np. `lang="pl-PL"` i `dir="ltr"` |
| `<?php bloginfo('charset'); ?>`  | w `<meta charset>`          | Wstawia poprawne kodowanie znaków, np. UTF-8 |
| `<?php body_class(); ?>`         | w tagu `<body>`             | Dynamiczne klasy: np. `home`, `single`, `logged-in` |
| `<?php wp_title(); ?>` lub `title_tag` | w `<title>`             | Wstawia tytuł strony/posta |
| `<?php get_header(); ?>`, `get_footer()` | zamiast duplikować `<head>` i `<footer>` | Dzieli kod na moduły i poprawia czytelność |
