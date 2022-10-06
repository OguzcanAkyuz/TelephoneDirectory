# TelephoneDirectory
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
index.php

Projemizin başlangıcında bizi bir login sayfası karşılıyor md5 olarak şifrelenmiş bir şekilde kullanıcı adı şifre girmemiz isteniyor (Username: admin,password:admin) 
Database içerisinde şifremiz 21232f297a57a5a743894a0e4a801fc3 tutuluyorken, arayüzümüzde admin girdiğimizde giriş yapılıyor. Login olmadan başka bir sayfaya gidilemiyor. 
Session sayesinde url kısmında login olmadan bir link yazdığımızda ilerleyemiyoruz.
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
homepage.php 

Burada projemizin anasayfası yer alıyor başlagıçta php ile session_start() bu sayfada pw yoksa login sayfasına atması için kural yazıyoruz.
HTML ile tasarımımızı yaptıktan sonra Sıralı bir şekilde ilk tıklanılabilir yerde numaralar var, numaraların üzerine tıkladığımızda Tarayıcımızda numaramızı eşitlemişsek
o numara aranılabilir hale getirdim.

Search kısmı için search.js 
Javascript ile  search.js içerisinde search.person diye fonskiyon oluşturdum bir metot yazarak animasyonlu bir şekilde arattığınızı size getiren bir kısım.


(update1.php)
Update kısmına geldiğimizde update sayfasına id ile giden bir yapı kurdum, diğer sayafada id yazdırıp gizledim daha sonra değiştirmek istediğiniz şekilde 
değiştirebildiğiniz bir yapı ekledim, HTML ile numarlara sadece sayı girilebilen bir input ayarladım.Her kaydetme kısmından sonra homepage yönlendirmesi yaptım.

(delete.php)
Delete kısmına geçtiğimizde tıklandığında idye göre silebilen bir yapı kurdum, tıklandığında emin misin yazdıran bir modal oluşturdum modal içindeki cevaba göre 
silmek ister misiniz? yoksa iptal gibi bir seçenek koydum.


-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Navbar kısmına geldiğimizde sağ tarafta Logout kısmını oluşturdum burada session ile diğer sayfalarda uyguladğımın tam tersi olarak pw var ise login sayfasına yönlendirerek
çıkış yapılmasını sağlıyorum.
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
Kisiekle.php içerisinde html düzenlemelri yaptık öncesinde saveperson.php ile database kaydetmek için methodumuzu yazdık html ilerisinde form post ile saveperson.php post
methodu ile database ekleme işlemini gerçekleştirdik.
-------------------------------------------------------------------------------------------------------------------------------------------------------------------------
database.php 
=> İlk adımda XAMP Kontrol merkezimiznden bir adet MySQL serverimizi çalıştırdıktan sonra admin kısmına tıklıyoruz. 

=> Bizi bir localhost karşılıyor üst tarafta veritabanları kısmına tıklayıp yeni oluştur kısmına geliyoruz. Sol tarafa veritabanı ismimizi sağ tarafa önceden yapılandırılmış veritabanları karşılıyor. Karşılaştırmaya tıklayarak oluştura tıklıyoruz veritabanımız hazır.

-----------------------------------------------------------------------------------------------------------------------------
                            Veritabanı Bağlama İşlemleri
<?php 
$dsn= 'mysql:dbname=telephone_directory;host';
$user='root';
$password='';

try{

	$db= new PDO($dsn, $user, $password);
	echo "connection succes";

}catch (PDOExpection $e)
{
	echo 'connection error'. $e->getMessage();
}

?>

Kodlarımızı tek tek inceleyelim.

ilk sırada $dsn var   DSN= Veri kaynağı adı olarka açılımı olarak burada dabase ismimizi ve hangi hosta bağlanacağını yazıyoruz, tabi local olduğu için böyle ama bir şirket içerisinde olduğumuzda bir ip ve port içeridiğini unutmayalım. 

2.sıradaki mysql default içerisinde olan user adını giriyoruz = default : root
3.sırada mysql içerisinde default password boştur .

Daha sonra bir try cath ile oluşturuyoruz PDO açarak (mysql veritabanı bağlantısı oluşturuyoruz.)  PDO içerisinde yukarıda oluşturduğumuz dsn,user ve password ekli eğer bağlanamadıysanda connection error döndürüyoruz.
![image](https://user-images.githubusercontent.com/103968958/194426618-77ac54d9-5069-4549-b36f-720f18663ebb.png)

