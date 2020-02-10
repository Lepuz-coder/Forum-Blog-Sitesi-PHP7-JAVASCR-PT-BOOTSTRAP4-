# Forum Blog Front-end ve Back-end Template
    
   # Site Hakkında :
 Bu site kullanıcıların üyelik yaparak giriş yaptığı ve izledikleri diziler, filmler hakkında yorumlar yapabildiği bir site projesisidir.Bu site içeirisinde neler yapabilirsin ?
  1-)İstediğin dizi/filmin ismini arama motorunda aratıp yazıları inceleyebilir
  2-)İzlemiş olduğun dizi/film hakkında kendine özgü bir yazı yazabilir
  3-)Yazılarını beğendiğin kullanıcıları takip edebilir, onlara özelden mesajlar yazabilirsin
  4-)Yazılara yorum yazabilir, yorumları cevaplayabilirsin
  
  Site özellikleri bunlardır.Tabiki de böyle bir site yok.Bu projede amacım ise klasik bir forum sitesine farklı bakış açısı getirerek oluşturmak ve bunu herkesin kendine özgü değiştirebileciği açık kaynaklı bir kod haline getirmek.



  # 1-) Kullanılan Diller : 
 * Front End : Html,Css,Bootstrap,javascript,jquery
 * Back End : PHP 7, Ajax
   
 
# 2-)Sitenin Kısımları

Menü kısmındada görüldüğü gibi Tüm Yazılar, Popüler Yazılar ve Takip Ettiklerim olarak üç kategori bulunmamaktadır.Ana sayfa ile Tüm yazılar aynı kısımdır.

  ## Ana Sayfa(Tüm Yazılar)
  --Anasayfada kullanıcıların son atmış olduğu yazıların bir kısmını,başlığını ve gönderen kullanıcı adının yazdığı kısımları bulunmakta     aynı zamanda Film ve Dizi diye iki kategoriye ayrılmaktadır, Ana sayfa sığmadığı için 3 örnek fotoğraf ile ana sayfa templateni göstermek   istedim :
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/ana-1.png)
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/ana-2.png)
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/ana-3.png)
  
  ## Popüler Yazılar
  * Popüler Yazılara tıklandığında ise inceleme sayısı en fazla olandan en az olan yazı şeklinde sıralama yapılacak şekilde yazılar gelir :
  
    ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/Populer.png)
  
  ## Takip Ettiklerim
  
  Giriş yapmamış bir kullanıcı Takip ettiklerim kısmına tıkladığında giriş yapma menüsüne yönlendirilir : 
  
   ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/Giris.png)
   
   Giriş yapmış bir kullanıcı ise Takip ettiklerim kısmına tıkladığında ise takip etmiş olduğu kullanıcıların yazıların son eklenenden ilk eklenee doğru getirir, eğer ki takip ettiği kullanıcıların yazıları bulunmamaktaysa : 
   
 ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/TakipYok.png)
 
 Şeklinde bir uyarı mesajı verir. Takip ettikleri var ise anasayfada olduğu gibi yazıları getirir.Tek farkı sadece takip ettiği kullanıcıların yazıları gelir.


  ## Mesajlar
  
  Mesajlar kısmı önceki " https://github.com/Lepuz-coder/PHP7-Ajax-Chat-Applictation " projemin mantığının çok benzerini içeren bir sistem kullanmaktadır.Tamamıyla not defterine yazıların yazıldığı ve oradan mesajların alındığı bir sistemden oluştuğu, veritabanına bağlantı kurmadığı için güvenilir, hızlı çalışan bir sistemdir.
  
   ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/chat-1.png)
  
  Karşılıklı olarak yazılan mesajlar anında iletilir ve canlı bir şekilde mesajlaşlma özelliğine sahiptir.
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/chat-2.png)
  
  ## Yazılar
   Bir kullanıcının eklemiş olduğu yazılar aşşağıdaki resimlerde gözüktüğü gibi görünmektedir ve yazı beğenilebir,yorum atılabilir ve yorumlar cevaplanabilir.
   
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazı-1.png)
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazı-2.png)
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazı-3.png)
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazı-4.png)
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazı-5.png)
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazı-6.png)
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazı-7.png)

  Ve okunulan yazıya göre yorumların hemen sonunda o yazıya göre önerme sistemi bulunmaktadır.İlk 3 önerme o dizi veya filmin yazılarını önerir eğer ki o dizi veya film ile alakalı bir yazı yok ise en çok beğenilen o da yoksa en çok incelenen film/dizilerin yazılarının ön taslaklarını gösterir.İkinci kısımda ise birinci kısımda beğenilen yazılar seçilmediyse seçilen yazı dizi ise en çok beğenilen 3 dizi yasısı film ise film yazısını gösterir seçilmiş ise en çok incelenen 3 film/dizi yazısını gösterir. 3.kısımda ise seçilen dizi ise en çok beğenilen 3 film yazısı seçilen film ise en çok beğenilen 3 dizi yazısı gösterilir
  
 ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazı-on.png)

   ## Bildirimler
   Sahip olduğun bir yazıya bir yorum geldiğinde, beğenildiğinde ya da yazmış olduğun bir yoruma cevap geldiğinde, bir kullanıcı seni takip ettiğinde bunun hakkında bildirim kutusuna direk bildirim gelir.
   
 ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/bildirim.png)
 
  Yeni bir mesaj geldiğinde ise mesajlar yanında bildirim sayısı için sayı çıkar, her bir kullanıcıdan gelen mesaj sayıyı bir artırır.Örnek olarak bir kullanıcıdan 10 mesaj başka bir kullanıcıdan 3 mesaj gelirse Mesajla kısmının solunda 2 yazar
  
![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/mesaj.png)

## Yazı Ekleme

Yazı Ekleme kısmı 3 kısımdan oluşmaktadır

  * Önce kullanıcı dizi veya filmi seçer
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/secim-1.png)
  
  Bu seçim esnasında arama motoru var olan dizi/film'lerden sonuçları yardımcı olmak için çıkarır.Bu kısım veritabanındaki dizi ve filmler tablosundan çekilmektedir.Veri tabanına ekleme işlemini admin paneli kısmında değiniceğim
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/Secim-2.png)
  
  Dizi/Film seçildikten sonra filme/diziye verilen puan, yazının başlığı ve yazı için text-editor bulunmaktadır.Text-editor hazır olarak dahil edilmiştir.Ve kullanıcının isteğine göre de yazıya kapak eklemek için resim ekleme kısmı bulunmaktadır.
  
   ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazma-1.png)
   
   Kullanıcı yazıyı göndermeden önce yazıya girmeden ve yazıya girdikten sonra yazısının nasıl gözüktüğünü önizle butonuna tıklayarak görebilir.
   ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazma-2.png)![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/yazma-3.png)
   
  Ve göndere tıklandığında yazı eklenir.Eklenen yazı veritabanına eklenir ve bütün kullanıcılar tarafından incelenmeye hazır hale gelir.

  ## Ayarlar
  Kullanıcı profil ayarlarına girerek emaili onaylanmamış ise emailini onaylayabilir(Bu işlem kayıt sırasında da yapılabilir) ve kullanıcı adı, şifre, profil resmi gibi ayarlarını değiştirebilir.
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/ayarlar.png)
  
  ## Arama Motoru
  Kullanıcı tarafından aranan değer iki tarafta aranır.Aşağıdaki resimde de görüldüğü gibi sol tarafta yazılarla alakalı sonuçları, sağ tarafta ise kullanıcılar ile alakalı sonuçları çıkarır.
  
  * Bir kullanıcı aranırken çıkan örnek arama sonucu :
  
    ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/arama-1.png)
    
  * Bir film aranırken çıkan örnek arama sonucu :
  
    ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/arama-2.png)
  
  
  ## Profil Hesabı
  Kullanıcıların profil hesaplarında onların yazılarını görebilir, onları takip edebilir ya da direk mesaj gönderebilirsin
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/profil.png)
    
  # 3-)Admin paneli
  Öncelikle admin paneline giriş yapmak için link yapısı
  http://localhost/php/Bireyselu/forum/admin/index.php?sifre=123456789
  şeklindedir.Burada amaç admin panelinin girişini sadece sizi tarafınızdan yapılması.Diğer kullanıcılarının girişini engellemek.Şifreyi kendinize özgü değiştirmek için 
  admin/index.php dosyasındaki hemen görülen
          
          <?php if(@$_GET['sifre'] == "123456789"): ?>	
          
   kısımdaki şifreyi dilediğiniz gibi değiştirerek yapılabilir.
  
  Admin paneline giriş yaptıktan sonra ise
  
   * Kullanıcı ayarlarını ve yazılarını görebileceğiniz ve istediğinizi kaldırabileceğiniz kısım 
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/admin-1.png)
  
  * Veritabanına film veya dizi eklemek ya da güncel filmleri ve dizileri otomatik olarak veritabanına eklemek için 
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/admin-2.png)
  
  * Ve son olarak popüler filmleri dizileri manuel olarak ayarlamak için 
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/admin-3.png)
  
  3 kısımdan oluşmaktadır.
  
  ### UYARI ! 
  Yazıları veritabanı tablosundan silmek yerine admin paneli kullanarak silmek daha kolay olacaktır.Çünkü o yazıların altında bulunan yorumlarını ve cevaplarını aynı zamanda bildirimlerini teker teker elle bulup silmek gerekir.Fakat admin panelinden silinince otomatik olarak bütün işlemler yapılır
  
  # 4-)Mobil Uyumluluğu
  
  Site tamamıyla mobil uyumlu hazırlanmıştır.Kendin kullandığında zaten bunu göreceksin fakat yine de bir kaç örnek göstemek istedim :
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/mobil-1.png)
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/mobil-2.png)
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/mobil-3.png)
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/mobil-4.png)
  
  ![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/mobil-5.png)
  
  
# 5-) SEO Yapısı
Site olabildiğince SEO yapısına uyumlu olarak yapılmıştır.Link yapısıü başlık sırası, meta etiketlerine özen gösterilmiş ve otomatik yapıya bağlanmıştır.Fakat site haritasnın host alındıktan sonra ayarlanmasının daha sağlıklı olduğunu düşündüğümdem hazırlamadım

# 6-) Kurulum Ayarları

1-) Öncelike ana.php dosyasının en başındaki veritabanı bağlantısını kendi veritabanınıza göre düzenlemeniz gerekiyor.

      $db = new PDO("mysql:host=localhost;dbname=dizi_forum;charset=utf8","root","");
      
2-) Ve dizi_forum.sql dosyasını veritabanınıza eklemeniz gerekiyor.

3-)

Bu iki ayarı yaptıktan sonra site kullanılmaya ve senin ellerinde geliştirilmeye hazır olacaktır İYİ KULLANMALAR ! :)


# NASIL DEĞİŞİKŞLİK YAPABİLİRİM ?

  
![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/class.png)

Resimde de görüldüğü gibi tüm ayarlar ana.php dosyasının içindeki bu classların içinde açıklamaları ile beraber bölümlere ayrılmış durumda.Evet, biliyorum dosya dizinini görüldüğünde fazlasıya karmaşık duruyor.Fakat class yapıları, javascript kodları en basit halinde ve sıralı bir şekilde kullanılmıştır.Bu yüzden değişiklik yapmak hiç de zor değil.Sadece kafanın karışabileceği bir kaç şeye açıklama getirmek istiyorum

  * Email onayınının kullanıcıya gitmesi için kullanılan emaili nereden değiştrebilirsin ?
  
        kayit_islemleri/mail_gonder şeklinde classı açarsan oradan email ayarlarını dilediğin gibi değiştrebilirsin
        
    
![alt text](https://github.com/Lepuz-coder/Forum-Blog-Sitesi-PHP7-JAVASCR-PT-BOOTSTRAP4-/blob/master/%C3%B6rnek%20resimler/class-2.png)


   * Şifreleme methodunu nasıl kendine özgü hale getirebilirsin ?
   
   ana.php'nin en başındaki fonksiyonlar zaten config dosyasında bulunacak tiplerden fonksiyonlardır.Bunlardan krypto isimindeki fonksyion ise benim yazmış olduğum şifreleme methodunu içinde barındırır.Fakat yine de kendine özgü değişiklik yapabilirsin.

# NEDEN MVC YAPISI KULLANMADIN ? 

  Öncelikle iki sorunun sorulabileceğini düşünüyorum ve ikisini de aynı başlık altında incelenmesi gerektğini de düşünüyorum.
    Bu sorulardan biri neden Laravel gibi bir framework kullanmadın ?
    İkincisi ise neden kendi mvs yapısı kurarak kullanmadın ?
    
   Bunları cevabı ise çok basit.Bireysel olarak geliştirmeden kaynaklı.Evet, mvc yapısı kullansam daha anlaşılır ve geliştirilmesi daha kolay olur.Ama performans olarak daha yavaş olacağını düşündüğümden ve projeye başladığımda aslında bunu bitireceğimi pek düşünmediğimden mvc yapısı kullanma fikrinden kaçındım.
   
  
   Ama ilerleyen zamanda mvc yapısına aktararak kodların daha anlaşılır ve kendine özgü daha kolay değiştirilebilir hale getirmeyi planlıyorum.
   
  --------------------------------------- TÜM ÖNERİLERE VE GELİŞTİRMELERE HER ZAMAN AÇIĞIM --------------------------------------------
