soucode-clone/            # root
 ├─ app/
 │   ├─ Http/
 │   │   ├─ Controllers/
 │   │   │   ├─ PageController.php
 │   │   │   └─ LoanController.php
 │   │   └─ Requests/
 │   │       └─ StoreLoanRequest.php
 │   ├─ Models/
 │   │   ├─ LoanApplication.php
 │   │   └─ ActivityLog.php
 ├─ database/
 │   ├─ migrations/
 │   └─ seeders/
 ├─ resources/
 │   ├─ views/
 │   │   ├─ layouts/
 │   │   │   └─ app.blade.php
 │   │   ├─ pages/
 │   │   │   ├─ home.blade.php
 │   │   │   ├─ phone.blade.php
 │   │   │   ├─ dashboard.blade.php
 │   │   │   ├─ apply.blade.php
 │   │   │   └─ products.blade.php
 │   │   └─ admin/
 │   │       ├─ index.blade.php
 │   │       └─ show.blade.php
 ├─ routes/
 │   ├─ web.php
 │   └─ api.php
 ├─ public/          # favicon, logo, assets
 └─ tailwind.config.js
