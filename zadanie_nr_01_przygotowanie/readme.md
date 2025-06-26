## Zadanie nr 01 – Przygotowanie do warsztatów: czysty WordPress

### 🎯 Cel

Upewnijmy się, że wszyscy uczestnicy mają przygotowane środowisko do tworzenia nowego szablonu WordPress od podstaw.

### ✅ Wymagania wstępne

- Czy wszyscy uczestnicy mają dostęp do **instalacji WordPress**, na której będzie można pracować?
  - **Najlepiej czysta instalacja**, bez gotowych motywów czy dodatkowych konfiguracji.

### 🛠 Konfiguracja środowiska

1. **Wyłącz wszystkie pluginy**, w szczególności:
   - Akismet Anti-Spam
   - Hello Dolly

2. **Usuń niepotrzebne motywy**, pozostaw tylko domyślny (np. `Twenty Twenty-Four`).

3. **Instalujemy pluginy**
   - Classic Editor by WordPress.org
   - Admin Options Pages - by Johannes van Poelgeest (darmowa alternatywa ACF Pro)
   - (opcjonalnie) WPIDE - File Manager & Code Editor by XplodedThemes

### 🧩 Dla osób nieprzygotowanych

Jeśli ktoś **nie ma lokalnej instalacji WordPress**, może skorzystać z dwóch alternatywnych rozwiązań:

#### Opcja 1

Sponsor WordCamp 2025 **dhosting.pl**, udostępnił darmowe instalacje WordPress na czas warsztatów.

Prowadzący rozdają dostępy. 

Przyda się też program **FileZilla**, tak aby móc przesłać pliki na serwer:
[Jak przesłać pliki poprzez FTP używając aplikacji FileZilla?](https://dhosting.pl/pomoc/baza-wiedzy/jak-przeslac-pliki-poprzez-ftp-uzywajac-aplikacji-filezilla/)


#### Opcja 2

**TasteWP** to darmowe narzędzie online, które pozwala szybko uruchomić tymczasową instalację WordPressa w przeglądarce – bez potrzeby instalowania czegokolwiek lokalnie. Świetnie sprawdza się do testów i nauki. Konto nie jest wymagane.

🔗 [https://tastewp.com/](https://tastewp.com/)

⚠️ **Uwaga:** Przy edycji niektórych plików – szczególnie `functions.php` – w środowisku TasteWP może dojść do błędów krytycznych, które tymczasowo zablokują dostęp do strony. Na szczęście w większości przypadków powinno dać się odzyskać dostęp.

Osoby korzystające z TasteWP muszą **szczególnie uważać podczas kopiowania i wklejania kodu do `functions.php`** – zalecamy dodawać kod ostrożnie.

