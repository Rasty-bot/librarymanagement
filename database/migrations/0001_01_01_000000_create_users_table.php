<?php
class Book {
    private $title;
    private $author;
    private $description;
    private $isbn;
    private $publishedYear

   public function _construct($title, $author, $description, $isbn, $publishedYear) {
    $this->title = $title;
    $this->author = $author;
    $this->description = $description;
    $this->isbn = $isbn;
    $this->publishedYear = $publishedYear;
   } 

   public function getTitle(){
    return $this->title;
   }

   public function getAuhtor(){
    return $this->author;
   }

   public function getDescription(){
    return $this->description; 
   }

   public function getIsbn(){
    return $this->isbn; 
   }

   public function getPublishedYear(){
    return $this->publishedYear; 
   }

   public function displayInfo(){
    return "Title: " . $this->title . "\n " . 
           "Auhtor" . $this->auhtor . "\n" . 
           "Description" . $this->description . "\n" . 
           "Isbn" . $this->isbn . "\n" . 
           "PublishedYear" . $this->publishedYear . "\n" . 

   }
}

// Example usage:
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald", "A novel set in the 1920s", "9780743273565", 1925);
echo $book1->displayInfo();
>?
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
