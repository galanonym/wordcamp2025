# 🧱 Zadanie nr 080 – Lista wpisów w archive.php (The Loop + template part)

## 🎯 Cel

Nauczyć się wyświetlać listę wpisów w archiwum kategorii, używając własnego pliku `loop.php` jako template part.

---

## 📝 Krok 1: Utwórz kilka testowych wpisów

1. Przejdź do **Wpisy > Dodaj nowy**.
2. Utwórz co najmniej 3 wpisy z różnymi tytułami i treściami.
3. Opublikuj każdy z nich.

---

## 🏷️ Krok 2: Dodaj kategorie do wpisów

1. Podczas edycji wpisu przypisz mu kategorię (lub dodaj nową).
2. Zapisz zmiany.

---

## 🔍 Krok 3: Sprawdź podgląd kategorii

1. Przejdź do **Wpisy > Kategorie**.
2. Najedź kursorem na dowolną kategorię i kliknij **„View” / „Zobacz”**.
3. WordPress przeniesie Cię na stronę typu `category-slug`, która używa pliku `archive.php`.

---

## 🧩 Krok 4: Utwórz template part `loop.php`

Utwórz plik: `wp-content/themes/wordcamp-2025/template-parts/loop.php`

Wklej do niego poniższą wersję pętli WordPressa:

```php
<section>
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="post-item">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div class="post-excerpt"><?php the_excerpt(); ?></div>
      </div>
    <?php endwhile; ?>
  <?php else : ?>
    <p>Brak wpisów w tej kategorii.</p>
  <?php endif; ?>
</section>
```

```css
  .post-item {
    margin-bottom: 30px;
  }

  .post-item a {
    color: #0073aa;
  }
```
