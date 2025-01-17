<?php

namespace Faker\Provider\id_ID;

class Person extends \Faker\Provider\Person
{
    protected static $lastNameFormat = array(
        '{{lastNameMale}}',
        '{{lastNameFemale}}',
    );

    protected static $maleNameFormats = array(
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{lastNameMale}} {{suffix}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastNameMale}}',
        '{{firstNameMale}} {{firstNameMale}} {{lastNameMale}} {{suffix}}',
    );

    protected static $femaleNameFormats = array(
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{lastNameFemale}} {{suffix}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastNameFemale}}',
        '{{firstNameFemale}} {{firstNameFemale}} {{lastNameFemale}} {{suffix}}',
    );

    /**
     * @link http://www.nama.web.id/search.php?gender=male&origin=Indonesia+-+Jawa&letter=&submit=Search
     */
    protected static $firstNameMale = array(
        'Abyasa', 'Ade', 'Adhiarja', 'Adiarja', 'Adika', 'Adikara', 'Adinata',
        'Aditya', 'Agus', 'Ajiman', 'Ajimat', 'Ajimin', 'Ajiono', 'Akarsana',
        'Alambana', 'Among', 'Anggabaya', 'Anom', 'Argono', 'Aris', 'Arta',
        'Artanto', 'Artawan', 'Arsipatra', 'Asirwada', 'Asirwanda', 'Aslijan',
        'Asmadi', 'Asman', 'Asmianto', 'Asmuni', 'Aswani', 'Atma', 'Atmaja',
        'Bagas', 'Bagiya', 'Bagus', 'Bagya', 'Bahuraksa', 'Bahuwarna',
        'Bahuwirya', 'Bajragin', 'Bakda', 'Bakiadi', 'Bakianto', 'Bakidin',
        'Bakijan', 'Bakiman', 'Bakiono', 'Bakti', 'Baktiadi', 'Baktianto',
        'Baktiono', 'Bala', 'Balamantri', 'Balangga', 'Balapati', 'Balidin',
        'Balijan', 'Bambang', 'Banara', 'Banawa', 'Banawi', 'Bancar', 'Budi',
        'Cagak', 'Cager', 'Cahyadi', 'Cahyanto', 'Cahya', 'Cahyo', 'Cahyono',
        'Caket', 'Cakrabirawa', 'Cakrabuana', 'Cakrajiya', 'Cakrawala',
        'Cakrawangsa', 'Candra', 'Chandra', 'Candrakanta', 'Capa', 'Caraka',
        'Carub', 'Catur', 'Caturangga', 'Cawisadi', 'Cawisono', 'Cawuk',
        'Cayadi', 'Cecep', 'Cemani', 'Cemeti', 'Cemplunk', 'Cengkal', 'Cengkir',
        'Dacin', 'Dadap', 'Dadi', 'Dagel', 'Daliman', 'Dalimin', 'Daliono',
        'Damar', 'Damu', 'Danang', 'Daniswara', 'Danu', 'Danuja', 'Dariati',
        'Darijan', 'Darimin', 'Darmaji', 'Darman', 'Darmana', 'Darmanto',
        'Darsirah', 'Dartono', 'Daru', 'Daruna', 'Daryani', 'Dasa', 'Digdaya',
        'Dimas', 'Dimaz', 'Dipa', 'Dirja', 'Drajat', 'Dwi', 'Dono', 'Dodo',
        'Edi', 'Eka', 'Elon', 'Eluh', 'Eman', 'Emas', 'Embuh', 'Emong',
        'Empluk', 'Endra', 'Enteng', 'Estiawan', 'Estiono', 'Eko', 'Edi',
        'Edison', 'Edward', 'Elvin', 'Erik', 'Emil', 'Ega', 'Emin', 'Eja',
        'Gada', 'Gadang', 'Gaduh', 'Gaiman', 'Galak', 'Galang', 'Galar',
        'Galih', 'Galiono', 'Galuh', 'Galur', 'Gaman', 'Gamani', 'Gamanto',
        'Gambira', 'Gamblang', 'Ganda', 'Gandewa', 'Gandi', 'Gandi', 'Ganep',
        'Gangsa', 'Gangsar', 'Ganjaran', 'Gantar', 'Gara', 'Garan', 'Garang',
        'Garda', 'Gatot', 'Gatra', 'Gilang', 'Galih', 'Ghani', 'Gading',
        'Hairyanto', 'Hardana', 'Hardi', 'Harimurti', 'Harja', 'Harjasa',
        'Harjaya', 'Harjo', 'Harsana', 'Harsanto', 'Harsaya', 'Hartaka',
        'Hartana', 'Harto', 'Hasta', 'Heru', 'Himawan', 'Hadi', 'Halim',
        'Hasim', 'Hasan', 'Hendra', 'Hendri', 'Heryanto', 'Hamzah', 'Hari',
        'Imam', 'Indra', 'Irwan', 'Irsad', 'Ikhsan', 'Irfan', 'Ian', 'Ibrahim',
        'Ibrani', 'Ismail', 'Irnanto', 'Ilyas', 'Ibun', 'Ivan', 'Ikin', 'Ihsan',
        'Jabal', 'Jaeman', 'Jaga', 'Jagapati', 'Jagaraga', 'Jail', 'Jaiman',
        'Jaka', 'Jarwa', 'Jarwadi', 'Jarwi', 'Jasmani', 'Jaswadi', 'Jati',
        'Jatmiko', 'Jaya', 'Jayadi', 'Jayeng', 'Jinawi', 'Jindra', 'Joko',
        'Jumadi', 'Jumari', 'Jamal', 'Jamid�l 'JAiw', 'Jefri', 'Johan', 'Jknk',  `$!�  gKacuno'$�'Kajen',0&Yambcni', 'Kamydin�(!'Kas)ma~',('Oarja', 'karea&,*`       'KArmen', 'Kar�a#, !Oap{a',`#Karsana', 'arta' 'K`s�ralg,�'Kqsusra'
 `   a #Kavaca', 'Oascya',"'Kaytf', 'Kemba' 'Kenerk', 'Kene3', 'Kun�a2a',
"0     �'Kun4`arp'< 'K7sUma', 'Kadir, 'kalA&, 'KaLim'd �Ku�fya$ 'Kanda',
0!$   , 'Kavdi'$ 'Karya', ?Kasi-', 'Ceirav, 'KuNzMe%, 'Kdmal', 'Kqmam', 'Koko',
8  "    gLa&uh'l Lak�ani', 'LamAr', 'Lqnanc', &Langgen�'� 'LanbAr, 'Dantar',
    �  �Hega'$ 'LegawC',0�emja�',0&L)man/, 'Li�Ar'4 'LUheng', #MuJmt`',
!     ! 'Luluh'l!'\ulut'< Lurhqr#, 'LUwar', 'L}ues/, '\atif', 'LasoanTN',
2 !     Lu{m`n/� 7uthfi', 'H�g< /Duic&,('Lttfan',!'asmono',0'L`swi'l
 `$    �'Mahesa7, 'Ie�`v%', &M�kuta',`'Manah',$'masak', 'Iargan`','maria$i7,
  �     'mavsqdi', 'MartEkq', 'Mirtaja', 'Martafi', &Merwada', 'Msry�di'�
   �   "'Masyanto', 'Mi|ra'l '�u*tr'� 'M�LYi',"'Mulyantng, ']ulyoLo', 'Mu-pwni'<
"       'Muni'. 'MubSyta', /EurPi', 'M53ti+a&, 'Lamcn', 'M!h-�l', 'Mchd�'l-
  (!(  "oI�HfwD'( 'M!dikw�"'Muhammad',"'M5st�fa/, 'MarQiTo', 'Mursini�',"0      'Nalar', 'NaRadi'L 'Nqrei' 'Fkyaga'l�'l2ima%, &Ntgrahao.!+N9a.a',
        %Ncrja',@'�asac',�'Ja�rul,ah', 'Nasii'$ #Jajyb',!'N`�am'- /Nyomab7-�
       "'G�gq',"'Kzy', �Olar'$ 'p`n'< 'Oski�',0'Olan', 'O�tm/,$'Okda'n &Mp�ng'-
  " � $ &P`iman',$'�n{a'.`% q.G%rao',"'@ancm{vu',�'Pardh', /Parmal7, 'Pepkasa7
 �`�   "�Praba'l �pR�Bu/,`'Qsabawa', /Prqjmwo', '@rakosag, 'PriNatag$ 'Pranav!',!       #Prcset�a/.!'Xsaseuyo', /Prahhtna%,`%Prqyoga'� 'prayogo7, '�ur�adi',
   0    'Purw`'m0'purwdndo&,�#P�nnI', 'Pandu', %Paiiaj', %P�imi', 'Putu',
 !    ( 'Rqden' %Raditye', '�e`arja',8'Ramq'l 7Relgga', 'REksa'� 'Respeti',(!!   $! 'rusma>', #Rosyan5< 'R!hIat', 'Rahman�, 'en`y7� 'Za��'< 'Ry�ki',J $      'Ridwao',!'S}dig, Rad�.'."'Ra�it', 'Rcf�ka', 'Rqfi#, 'Bafid%, 7Rakhan',
`" � "  7Salmab'< 'Saadet', /saiful', 'Sur�A', Slimet&, 'Sams��', /soleh',  (   00'Si}o~#,!gSeber', 'Sa�ry', 'Sidkq7, 'Satya'( 'Setya� g�aka'- 'Sakth', 4      'V`swmr', 'Te$i'� '�eddy', gTaufao',$'tafik', 'T/mi',$'Tasohl',
      ! �Te'qh', 'Tawui+', /Ti}bul', ']irtq', 'Pis~�yasal!'Tri'l 'PwgiMsn',
    1 ``'UmaR',0'Esman', 'UDa',('Umay#, %Unggwl�, 'Utamq', 'Umay%'� 7�pik',
 8 0    -Vykd?r', '�ino�,('Vinwao', 'Vero,�'Fega', gViman',0'Rirman',
        'Wah��'<r'Wiza', 'Wisnw'$ 'Widi'. 'W�rli', 'Warj�'$ 'Walwyg&,"'WAk[man7, � !"  �gWagg%( gWcvdeya7, 'Sa2wc', 'Sar{qta&, &U!rta'( 'Wasis�< 'Waw`n%,
     a0 'Xa�ana', '�ajaa,`�Yusuf'- #Yosef', %onm', %[oga',�(  `(;
  0 .�*
(   (j�@linc http://nc-afc.com/3010/0812/to`-1000�na-a-popUleb-yndnesia/
 "   */
 0  prntdktm` St`uic"$chrspNaoeFemale(=``pbay)' 0      Ade',"7agfes'( 'keng', 'Amamie, 'Anital 'Ayu�, 'Ais9a�',"'Ana7<	
�  (�$$ 'Amh', 'Ani/, 3Azalea', 'Qtror!', 'Alika', 'Anactasia', 'aMelia',!" *"!  '�lmi�a', 'BaLha', �B�tanma', 'Benin`e'� 'Citr`'$ ��indy#, '#Lemsea',
�`      'Klara',0'Rorneli`',�'Sh~tA', 'Cinp�iag, 'Cia�bell!', C)ci'(�'�ir�e',	
  `     'C�lista', 'Davi&, 'Dewm',Daal',('Diah'� /Diana'* 'Dina', 'Dindc',�  !"$  'Talimae,('Eka'. 'Eva'- 'ejdah'-!'E�isa', 'Eli/- 'EhLc',`%Elliq',  !  $`$'ElMa',1'Eh7ina', 'Fitr�i', 'kp�iani',"�Fe�i'l #faizai'. 'Farah�,
�    �  'FarhUv.ysa', 'Fathonah/, 'Gabrie~~a7, 'W`sti%,!'Fawapi#, 'G�j4�7,-
`$(   0 'GhAlmYa|I'l"gOi.�', 'W�lda�!/Halima' 'Hesti', 'HiLda', 'h�vshay#, �  "   &
`ima'. #Hkla', 'hani%, 'HaSna#, 'Humeisq7.�'Ika'� #Indah',`'Antan',
 (     $'Irea'( 'Kcha', %Id�', '�fa',!'Hl�a/,`In!',$'Hra', 'Hrian!', %
a}a,iq'J     ( 0'J!nmt',`'Nane', /J�,ia/,$'Jwli'- 'Jessica'<�'BAsM�f', 'Jelita&,
$`  2   '[a}qria&, 'Kamila', /Kani-, 'Ka2Eo. 'KarIM!j7, 'Kar4iia'( 'Ka{iyah,
@  0   `'Keisha%, 'Klzia'� 'Kiandra'l /Kcyhe78"'�ania', 'Lala' 7Hadit�',� `  (   'LAuika', #LAila', 'Lar�s', 'Hit}a/, 'Lali',�'Ni�tijg',!'Mabia&, ?M!la/,
   !(   ']aya',('L`)$i&, �Mqimun!h', 'Melin�a'-$'Mili', 'Mutkq',0'Iachellm/,
 (     ']alIka', 'Nadia'. #NaDine', 'NAbkda#( 'Batali`/, 'N�vi', 'NovI'l
   $  ! '^urtn', 'Nalal', 'Naj7a&, 'Onivia', 'Ophelia', 'Oni', 'Oliva', 'Padma',
        'Putri', 'Paramita', 'Paris', 'Patricia', 'Paulin', 'Puput', 'Puji',
        'Pia', 'Puspa', 'Puti', 'Putri', 'Padmi', 'Qori', 'Queen', 'Ratih',
        'Ratna', 'Restu', 'Rini', 'Rika', 'Rina', 'Rahayu', 'Rahmi', 'Rachel',
        'Rahmi', 'Raisa', 'Raina', 'Sarah', 'Sari', 'Siti', 'Siska', 'Suci',
        'Syahrini', 'Septi', 'Sadina', 'Safina', 'Sakura', 'Salimah', 'Salwa',
        'Salsabila', 'Samiah', 'Shania', 'Sabrina', 'Silvia', 'Shakila',
        'Talia', 'Tami', 'Tira', 'Tiara', 'Titin', 'Tania', 'Tina', 'Tantri',
        'Tari', 'Titi', 'Uchita', 'Unjani', 'Ulya', 'Uli', 'Ulva', 'Umi',
        'Usyi', 'Vanya', 'Vanesa', 'Vivi', 'Vera', 'Vicky', 'Victoria',
        'Violet', 'Winda', 'Widya', 'Wulan', 'Wirda', 'Wani', 'Yani', 'Yessi',
        'Yulia', 'Yuliana', 'Yuni', 'Yunita', 'Yance', 'Zahra', 'Zalindra',
        'Zaenab', 'Zulfa', 'Zizi', 'Zulaikha', 'Zamira', 'Zelda', 'Zelaya',
    );

    /**
     * @link http://namafb.com/2010/08/12/top-1000-nama-populer-indonesia/
     * @link http://id.wikipedia.org/wiki/Daftar_marga_suku_Batak_di_Toba
     */
    protected static $lastNameMale = array(
        'Adriansyah', 'Ardianto', 'Anggriawan', 'Budiman', 'Budiyanto',
        'Damanik', 'Dongoran', 'Dabukke', 'Firmansyah', 'Firgantoro',
        'Gunarto', 'Gunawan', 'Hardiansyah', 'Habibi', 'Hakim', 'Halim',
        'Haryanto', 'Hidayat', 'Hidayanto', 'Hutagalung', 'Hutapea', 'Hutasoit',
        'Irawan', 'Iswahyudi', 'Kuswoyo', 'Januar', 'Jailani', 'Kurniawan',
        'Kusumo', 'Latupono', 'Lazuardi', 'Maheswara', 'Mahendra', 'Mustofa',
        'Mansur', 'Mandala', 'Megantara', 'Maulana', 'Maryadi', 'Mangunsong',
        'Manullang', 'Marpaung', 'Marbun', 'Narpati', 'Natsir', 'Nugroho',
        'Najmudin', 'Nashiruddin', 'Nainggolan', 'Nababan', 'Napitupulu',
        'Pangestu', 'Putra', 'Pranowo', 'Prabowo', 'Pratama', 'Prasetya',
        'Prasetyo', 'Pradana', 'Pradipta', 'Prakasa', 'Permadi', 'Prasasta',
        'Prayoga', 'Ramadan', 'Rajasa', 'Rajata', 'Saptono', 'Santoso',
        'Saputra', 'Saefullah', 'Setiawan', 'Suryono', 'Suwarno', 'Siregar',
        'Sihombing', 'Salahudin', 'Sihombing', 'Samosir', 'Saragih', 'Sihotang',
        'Simanjuntak', 'Sinaga', 'Simbolon', 'Sitompul', 'Sitorus', 'Sirait',
        'Siregar', 'Situmorang', 'Tampubolon', 'Thamrin', 'Tamba', 'Tarihoran',
        'Utama', 'Uwais', 'Wahyudin', 'Waluyo', 'Wibowo', 'Winarno', 'Wibisono',
        'Wijaya', 'Widodo', 'Wacana', 'Waskita', 'Wasita', 'Zulkarnain',
    );

    /**
     * @link http://namafb.com/2010/08/12/top-1000-nama-populer-indonesia/
     */
    protected static $lastNameFemale = array(
        'Agustina', 'Andriani', 'Anggraini', 'Aryani', 'Astuti',
        'Fujiati', 'Farida', 'Handayani', 'Hassanah', 'Hartati', 'Hasanah',
        'Haryanti', 'Hariyah', 'Hastuti', 'Halimah', 'Kusmawati', 'Kuswandari',
        'Laksmiwati', 'Laksita', 'Lestari', 'Lailasari', 'Mandasari',
        'Mardhiyah', 'Mayasari', 'Melani', 'Mulyani', 'Maryati', 'Nurdiyanti',
        'Novitasari', 'Nuraini', 'Nasyidah', 'Nasyiah', 'Namaga', 'Palastri',
        'Pudjiastuti', 'Puspasari', 'Puspita', 'Purwanti', 'Pratiwi',
        'Purnawati', 'Pertiwi', 'Permata', 'Prastuti', 'Padmasari', 'Rahmawati',
        'Rahayu', 'Riyanti', 'Rahimah', 'Suartini', 'Sudiati', 'Suryatmi',
        'Susanti', 'Safitri', 'Oktaviani', 'Utami', 'Usamah', 'Usada',
        'Uyainah', 'Yuniar', 'Yuliarti', 'Yulianti', 'Yolanda', 'Wahyuni',
        'Wijayanti', 'Widiastuti', 'Winarsih', 'Wulandari', 'Wastuti', 'Zulaika',
    );

    /**
     * @link http://id.wikipedia.org/wiki/Gelar_akademik
     */
    protected static $titleMale = array('dr.', 'drg.', 'Dr.', 'Drs.', 'Ir.', 'H.');

    /**
     * @link http://id.wikipedia.org/wiki/Gelar_akademik
     */
    protected static $titleFemale = array('dr.', 'drg.', 'Dr.', 'Hj.');

    /**
     * For academic title
     * @link http://id.wikipedia.org/wiki/Gelar_akademik
     */
    private static $�uffIx =!arsAy(�nOe@', '.��',0'R.Qt7$ 'Q^Ip', gC.E.I'$� �"�! ( &S.E.', &S.Kom'< 'S/H.'( 'S,T.', 'S.�d'< 'R/Psi'( '�nI�Kom', "      'S.Soq', #Q.Fa�}� 'O.M.%, 'M>Ko}.',0%M.TI.%$ 'M.Pl'l0%M.Berec,"'M.Ak'( );
�  (+*.
 (   * Return la�t nc�E"    *
  ! $*!@pabam str)ns|ng|l cend�v Male ob FemaLe or�Null fnr any
!!  $*
   " > @return strino last ncme
0 0  *-�
   %ptbli` function!lastnqme($g%nder�� Jull)
 �! {   $    if$($fe~de2 =9= gtetic:zMENDER_Ma�E) {
     00 $!` re�qR� statik2rl`sqJam�A�eh)*
        } 0  `   I&!8,genter ===0stetic:fMNF��^FEMAL�) {
"    $ 0 "( 0et}rl`sti|kc;*lastNa}eFa=qle);* !  � � }
 !      dlasvNa-tR!ndO-Elemen� =`stat��::ra~eomELamunt8static::&dastNameFormati9	

�(     (�etern`$t(ms->gejEra��r$>tAzsm($nastNamuZc~domElemEnt)9-
    }

    .***     * REturn last nae% n_r0male-�     *
   `�+ Acca�ss publ�c�" ��* @retuvn kvrinw"lasd name
  $  �/
    p|blir static funC�ion!l`stNcmeEale()
    z 0  `�  2etUr. statmk::rao�o-Elemdnv(suatmc:$lawtNaneMal�	
0   }

 "  /*

   $ ."Retuzn lAqt�N�le!for .mmalg
    0j	
 "   ) Peccess"pubdicJ!h �$" @ret]Rnsdring laqt!naa�*" "($"+K  $`public sv@tIc f|nbtion lasP^AoEFemahe()
  `){
      � rdturn sT'tMc:*�andnEMhemelt(s�et)c;:$lastNemeF!maH� ( "}*
    /*
b!!  *!�mr�aca`e}ic tidle
(    *M
    �*@abcgss P�rdyk
    (* @ped�rn qtrijg swffkxM
 "   */
    Rublyc slathc fun#|Io� suffih()
 `  {
        reTurn stati�:8bandOmElement(rTavic::sqfgi`); "0 }-
  d /**     * G%leratec(Nom/r`Indu� Kep%bdud�kan�(N	K(` !  *     * Plifk `tups://e~.wioipediq.org/w)i)/ationalidEnT�fic��imn_nUmjer#Indonesii
   � . (   *  paraM vuel\String!$gende"
  0  *"@pi2a-(nwll|\Fate�i!m@$irtjDate
     *`@reTurn rdrilw (   .'M
!   pubdib"f7nc|ion nIk($gender =0null= $bird@D�tE"} nUl,)	$   {�  *  `  # geoerate fi2q�*leicess  regkon"dava)=
   !    $niK = $phis�lg`Neri�o�->ndlermfy*######'-;M
	
   �  ! if �a,birtHDate- {
$ (     `(  $birthDat� =�$tlis��Faner`tor->t`teTmmEBet�een();
"(    " �
         if (c$gtnder9�{M
� 04  �$    $gender  dt(is->genesa�or-<�andmdleme�l(a�rAySelf2:GENDER_MALe, self::gUDER�EMALE));   0� ! }� �   $  #�if fen$gz is`femila, aD�` 0 to`days
  �  ! "xv"(dGe.deR`= we�f::ANDEB_DAMQLAi {J `$$ "      �~ii .=$$b)rthEate-~�oriat*'d%)" 40;
        } else {
 (     "00 0$nik /� $b+zthD!te/&ismIt(fd#);
  !0 0  }
/J    $4 �$nij �= $birt(Dqte-<fmvmat('my'({
J!    0!  Afd`��ct raodom!dicit{M    & ``$nikn=! tjis>Geoar#tor->�u-esi&{(7#3##/)?
     0  reTtpn Dnik;
!   }
}�
