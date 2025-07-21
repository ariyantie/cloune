Schema::create('loan_applications', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->cascadeOnDelete();
    $table->string('full_name');
    $table->string('nik', 20);
    $table->string('phone');
    $table->date('dob')->nullable();
    $table->string('gender', 10)->nullable();
    $table->string('address');
    $table->string('occupation')->nullable();
    $table->decimal('monthly_income', 15, 2)->nullable();
    $table->string('bank_account')->nullable();
    $table->string('ktp_photo');     // path file
    $table->string('selfie_photo');  // path file
    $table->enum('status', ['submitted','under_review','approved','rejected'])->default('submitted');
    $table->timestamps();
});
