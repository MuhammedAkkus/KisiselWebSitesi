# KisiselWebSitesi
HTML5 &amp; PHP &amp; MySQL ve Apache &amp; CSS3 &amp; JavaScript
Muhammed Akkuş
2111502053
Bilgisayar Mühendisliği(TR) 2. Sınıf

Site ile ilgili bilgiler:
=>Sitemiz index.php(anasayfa), panel.php(iletişim kontrol paneli), panelgiris.php(iletişim kontrol paneline giriş paneli), galeri.php(galeri sayfası) olmak üzere 4 farklı sayfadan oluşuyor.
=>panel.php'ye direkt giriş yapılamaz sayfaya giriş yapmak istediğinizde giriş bilgilerini girebilmeniz için panelgiris.php sayfasına yönlendirir.
=>panelgiris.php sayfasına doğru bilgilerle giriş yapmazsanız; "Senin Doğru Kişi Olduğunu Düşünmüyorum!!!" şeklinde bir uyarı ile karşılaşırsınız.
=>panelgiris.php sayfasında {(Kullanıcı Adı: Muhammed Akkuş), (Email Adresi: muhammedakkus.tr@gmail.com), (Parola: 12541263)} bilgileri ile giriş yaparsanız ancak giriş yapabilirsiniz.
=>Sitemizin en optimize ve dinamik biçimde çalışması için pek çok fonksiyon kullanımıştır.
=>Sitemizde menü kısmı hem index.php'de hem de galeri.php'de siz sayfayı hareket ettirdikçe sizinle beraber aşağı-yukarı yönde hareket eder.
=>Sitemizde menü kısmı hem index.php'de hem de galeri.php'de seçeneklerden birini seçtiğin anda ilgili kısma sayfayı kaydırma animasyonu ile kaydırarak götürür.
=>Sitemizde index.php sayfasındaki menü kısmındaki anasayfa ikonunu seçerseniz, sayfada sizi en üste götürdükten sonra sayfanızı yeniler.
=>Sitemizde index.php sayfasının en altındaki Touch Me ikonunu seçerseniz, sayfada sizi en üste götürür.
=>Sitemizde index.php sayfasının Hakkımızda kısmının en altındaki galeri ikonunu seçerseniz, sizi galeri.php sayfasına yönlendirir ve farklı bir sayfada açar.
=>Sitemizde index.php sayfasındaki eğitimler kısmına gelirseniz ilgili eğitimlerin istersenizi altında bulunan "< ve >" butonları ile hareket edebildiğini; isterseniz de mouse ile üzerine basılı tutup ilgili yöne hareket ettirerek o yönde hareket ettirebilirsiniz.
=>Sitemizde index.php sayfasındaki eğitimler kısmında herhangi bir eğitimin üzerine gelirseniz, hangi eğitime baktığınızı ayırt edebilmek için seçili eğitimin çerçevesindeki renk diğer eğitimlerden daha farklı bir renge geçiş yapar.
=>index.php sayfasının Faaliyetler kısmında, ortadaki diğerlerine göre daha üstte ve büyük görünecek şekilde 3 kuruma yer verilmiştir. İlgili kurumlar soldan sağa doğru kronolojik olarak sıralanmıştır. İlgili kurumların altında bulunan butonlar sırası ile soldan sağa doğru; LinkedIn, Instagram ve Web Sayfalarını farklı bir sekmede açmanıza yarar.
=>index.php sayfasının İletişim kısmında yazdığınız mesajlar panel.php'ye gönderilecek şekilde yöenticiye mesaj gönderme şansınız mevcuttur.
=>index.php sayfasının İletişim kısmında yazdığınız mesajlar gönderilirken bir hata ile karşılaşılırsa "Mesajınız Gönderilirken Bir Hata ile karşılaşılmıştır." uyarısı ekranınızda belirir.
=>index.php sayfasının İletişim kısmında yazdığınız mesajlar başarı ile gönderilirse "Mesajınız Başarı ile Gönderilmiştir." bildirimini görürsünüz.
=>index.php sayfasının İletişim kısmında eğer bilgileri doldurmadan mesaj göndermeye çalışırsanız boş olan alanlarda sırasıyla "Lütfen bu alanı doldurun." uyarısı alırsınız.
=>index.php sayfasının İletişim kısmında gönderilen her mesajın bir id numarası var ve mesaj gönderildikçe bu otomatik olarak artar.
=>Gönderilen mesajların veritabanındaki görünümünü görmek veya onları silmek için http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=muhammedakkus&table=iletisim sayfasına bakmamız gerekmektedir.
=>Veritabanına giriş yapabilmek için gerekli bilgileri baglanti.php kısmına bakabilirsiniz.
=>Veritabanı ile ilgili bir sıkıntı yaşarsanız "Veritabanı bağlantı işlemi başarısız" uyarısı ile karşılaşırsınız.
=>index.php sayfasının İletişim kısmının hemen altında soldan sağa doğru sırasıyla; LinkedIn, Instagram, E-posta Adresi, Github ve CV sayfalarıma ulaşabileceğiniz 5 ikon bulunmaktadır.
=>galeri.php kısmında herhangi bir resmin üzerine gelirseniz o resim cüzi miktarda yaklaşır ve altında açıklaması belirir.
=>galeri.php kısmında bulunan menü kısmındaki herhangi bir seçeneği seçerseniz, sizi o gruba dahil olan fotoğraflara ulaştırır.
=>panel.php kısmında herhangi bir veri yoksa en üstte "Veritabanında Kayıtlı Hiçbir Veri Bulunamamıştır!" uyarısı ile karşılaşırsınız.
=>panel.php kısmından çıkış yapmak istediğinizde sol üstte bulunan çıkış seçeneğini seçerek çıkış yapabilirsiniz. Bu işlem sizi panelgiris.php sayfasına yönlendirir.
