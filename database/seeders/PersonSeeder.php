<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Person;
use App\Http\Controllers\PersonController;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $PersonController = new PersonController();
        $qids = [
            "Q107315481", // Lucy Smith Millikin
            "Q107999917", // Christian Whitmer
            "Q1175942", // David O. McKay
            "Q1177157", // David Whitmer
            "Q1386097", // Ezra Taft Benson
            "Q1392118", // Harold B. Lee
            "Q1392523", // Spencer W. Kimball
            "Q1392562", // Heber J. Grant
            "Q1392595", // Joseph Fielding Smith
            "Q1392629", // George Albert Smith
            "Q1395725", // Fanny Alger
            "Q16030354", // Katharine Smith Salisbury
            "Q16063950", // Wilson Law
            "Q1681690", // Sampson Avard
            "Q203559", // Brigham Young
            "Q2348210", // Emma Smith
            "Q27682515", // Joseph H. Jackson
            "Q2976186", // Hyrum Smith
            "Q3027523", // Russell M. Nelson
            "Q3048224", // Joseph Smith III
            "Q3051180", // Eliza Roxcy Snow
            "Q313574", // Butch Cassidy
            "Q333620", // Thomas S. Monson
            "Q3809129", // John C. Bennett
            "Q43374468", // Eliza Maria Partridge Lyman
            "Q4424882", // Samuel H. Smith
            "Q47102", // Joseph Smith
            "Q4719048", // Alexander Hale Smith
            "Q4738229", // Alvin Smith
            "Q4740383", // Amasa Lyman
            "Q4979362", // Lucy Mack Smith
            "Q5196041", // John Whitmer
            "Q5216710", // Daniel C. Davis
            "Q5235307", // David Hyrum Smith
            "Q5292384", // Don Carlos Smith
            "Q5344778", // Edward Partridge
            "Q553147", // Gordon B. Hinckley
            "Q560707", // Wilford Woodruff
            "Q5702756", // Helen Mar Kimball
            "Q5907303", // Hosea Stout
            "Q6119456", // Jacob Whitmer
            "Q6181938", // Joseph Smith, Sr.
            "Q6306601", // Julia Murdock Smith
            "Q635520", // Lorenzo Snow
            "Q6684592", // Lot Smith
            "Q6778849", // Mary Ann Angell
            "Q7148692", // Patty Bartlett Sessions
            "Q7177696", // Peter Whitmer, Sr.
            "Q718919", // John D. Lee
            "Q7231650", // Porter Rockwell
            "Q727001", // Sidney Rigdon
            "Q7422060", // Sarah Ann Whitney
            "Q8000530", // Wild Bill Hickman
            "Q8014346", // William Law
            "Q8018530", // William Smith
            "Q8072227", // Zina D. H. Young
            "Q91157930", // Emily Dow Partridge
            "Q945517", // Howard W. Hunter
            "Q96572814", // Lydia Clisbee
            "Q982197", // Joseph F. Smith
            "Q982343", // Oliver Cowdery
            "Q1893466", // Martin Harris
            "Q5566211", // Gladden Bishop
            "Q1142551", // James Strang
            "Q5487375", // Warren Parrish
            "Q3067654", // Fawn M. Brodie
            "Q7177695", // Peter Whitmer, Jr.
            "Q18168455", // Solomon Chamberlain
            "Q5769245", // Hiram Page
            "Q8005527", // William Bickerton
            "Q5353692", // Elbert A. Smith
            "Q7372662", // Roy Cheville
            "Q5310323", // Duane E. Couey
            "Q6258375", // John Smith
            "Q6258357", // John Smith
            "Q5962252", // Hyrum G. Smith
            "Q7025427", // Nicholas G. Smith
            "Q5485138", // Frank B. Woodbury
            "Q5539137", // George F. Richards
            "Q6283079", // Joseph Fielding Smith
            "Q5354133", // Eldred G. Smith
            "Q6163679", // Jason W. Briggs
            "Q8069014", // Zenas H. Gurley, Sr.
            "Q552971", // Barton W. Stone
            "Q3847855", // Alexander Campbell
            "Q4356540", // George M. Hinkle
            "Q6251586", // John P. Greene
            "Q6227184", // John Corrill
            "Q2465604", // Parley P. Pratt
            "Q8071406", // Ziba Peterson
            "Q5360520", // Elias Higbee
            "Q7324486", // Richard Bushman
            "Q7647782", // Susan Easton Black
            "Q7946054", // W. W. Phelps
            "Q109769386", // Enon Phelps
            "Q106546277", // Sally Waterman Phelps
            "Q7787262", // Thomas B. Marsh
            "Q5423423", // Ezra Thayre
            "Q7847726", // Truman O. Angell
            "Q16214905", // Nicole Johnson
            "Q39071643", // James Hutchins
            "Q5542481", // George Miller
            "Q6128374", // James Adams
            "Q5219054", // Daniel Webster Jones
            "Q7298934", // Raymond Knight
            "Q3950338", // Sarah Marinda Bates Pratt
            "Q5543821", // George Reynolds
            "Q6283073", // Joseph Fielding McConkie
            "Q5287368", // Doctor Philastus Hurlbut
            "Q6263187", // John Watkins
            "Q6248490", // John Menzies Macfarlane
            "Q8010948", // William Harrison Folsom
            "Q5536131", // George Albert Smith, Jr.
            "Q4733533", // Alma Dayer LeBaron, Sr.
            "Q23696501", // Grietje Terburg Rowley
            "Q5129208", // Claudia Lauper Bushman
            "Q6249865", // John Murdock
            "Q7106297", // Oscar W. McConkie, Jr.
            "Q17306140", // Kate Kelly
            "Q540244", // John Taylor
            "Q2938881", // C. C. A. Christensen
            "Q7327991", // Richard N. Holzapfel
            "Q4977811", // Bruce L. Christensen
            "Q5130292", // Clayton Christensen
            "Q16105177", // Theodore H. Okiishi
            "Q6369829", // Karen Lynn Davidson
            "Q5561264", // Gilbert W. Scharffs
            "Q7599552", // Stanley D. Neeleman
            "Q15436407", // S. George Ellsworth
            "Q5106852", // Chris Heimerdinger
            "Q106413397", // Camille N. Johnson
            "Q15442989", // Richard E. Bennett
            "Q6791538", // Matthias F. Cowley
            "Q16066894", // Francis W. Kirkham
            "Q8008194", // William E. Berrett
            "Q7150180", // Paul Dayton Bailey
            "Q15451870", // Mark Ashurst-McGee
            "Q5343998", // Edward L. Clissold
            "Q5919971", // Howard J. Stoddard
            "Q8006277", // William C. Conway
            "Q16029336", // Orson Pratt Huish
            "Q4648391", // A. Scott Loveless
            "Q16252149", // Francis M. Higbee
            "Q4485182", // Bernard F. Fisher
            "Q4888993", // Benjamin M. Ogles
            "Q7273813", // R. Lanier Britsch
            "Q5407410", // Eugene Lusk Roberts
            "Q8019776", // William W. Davies
            "Q5181107", // Craig K. Manscill
            "Q552630", // Mervyn S. Bennion
            "Q5536550", // George B. Handley
            "Q8003479", // Willard Richards
            "Q9002343", // Heber C. Kimball
            "Q7965519", // Walter M. Gibson
            "Q6245633", // John Lyon
            "Q6713259", // M. Wells Jakeman
            "Q6765203", // Marion G. Romney
            "Q5628174", // H. Donl Peterson
            "Q7317415", // Reuben Broadbent
            "Q4821419", // Augustus Farnham
            "Q465580", // Newel K. Whitney
            "Q17540299", // Frank W. Hirschi
            "Q6790098", // Matthew B. Brown
            "Q7608999", // Stephen D. Ricks
            "Q16122852", // Heidi S. Swinton
            "Q7980612", // Welcome Chapman
            "Q5723656", // Henry J. Eyring
            "Q4924001", // Blaine Yorgason
            "Q5545648", // George W. Huber
            "Q6162462", // Jason F. Wright
            "Q8005107", // William Barratt
            "Q7347322", // Robert Manookin
            "Q6535504", // Levi Savage Jr.
            "Q105707275", // Wilford C. Wood
            "Q5248470", // Debra H. Sowell
            "Q16105957", // David C. Hoopes
            "Q24068877", // Fanny Stenhouse
            "Q6134404", // James G. Willie
            "Q5210451", // Dale G. Renlund
            "Q7306637", // Reed C. Durham
            "Q3815575", // Kirby Heyborne
            "Q5045393", // Carolyn Jessop
            "Q5545716", // George W. Pace
            "Q5538336", // George D. Watt
            "Q16210358", // Brent W. Jeffs
            "Q5326138", // Earl W. Bascom
            "Q5130114", // Clayne L. Pope
            "Q6763491", // Marilyn Arnold
            "Q7345562", // Robert Holding
            "Q5766598", // Nathan Pacheco
            "Q7615028", // Steven Mascaro
            "Q6997971", // Nestor Curbelo
            "Q7109579", // Otto Erlandsen
            "Q1278625", // Ebenezer Bryce
            "Q5607119", // Gregory Prince
            "Q94618677", // Phyllis Barber
            "Q6778450", // Marvin Perkins
            "Q6778474", // Marvin S. Hill
            "Q5384930", // Erasmo Fuentes
            "Q4768359", // Anne G. Osborn
            "Q6506449", // LeRoy R. Hafen
            "Q57292329", // Stillman Pond
            "Q4795207", // Arnold Potter
            "Q7704072", // Terry B. Ball
            "Q4961581", // Brent W. Webb
            "Q7563415", // Soren Edsberg
            "Q50825741", // Joseph Bishop
            "Q5396017", // Ervil LeBaron
            "Q16729055", // Renata Forste
            "Q26251384", // Lew W. Cramer
            "Q6262588", // John W. Welch
            "Q6177991", // Jennie Hansen
            "Q7374832", // Royal Skousen
            "Q5273038", // Dick Hunsaker
            "Q4977119", // Bruce Bastian
            "Q63194473", // Glenn Helzer
            "Q5460311", // Flora Jessop
            "Q7373461", // Roy W. Doxey
            "Q6851529", // Miles Romney
            "Q4961447", // Brent L. Top
            "Q2743275", // Brandon Mull
            "Q2482954", // Orson Pratt
            "Q16733269", // Nephi Jeffs
            "Q86125442", // Judy Dushku
            "Q7379083", // Rulon Jeffs
            "Q13471670", // John Dehlin
            "Q4301313", // Rex Maughan
            "Q15485352", // Darius Gray
            "Q7704264", // Terry Crapo
            "Q25028539", // Green Flake
            "Q437370", // Ally Condie
            "Q5115520", // Chuck Henry
            "Q519604", // Joi Lansing
            "Q2147070", // Rex E. Lee
            "Q22280145", // Julie Rowe
            "Q3849171", // Orson Hyde
            "Q6150571", // Jana Riess
            "Q16730250", // Seth Jeffs
            "Q1100946", // Ann Romney
            "Q64562638", // Roy Jeffs
            "Q889285", // John Baldwin Neil
            "Q6186357", // Jesse Gause
            "Q6708023", // Lyman E. Johnson
            "Q5240731", // David W. Patten
            "Q6702322", // Luke S. Johnson
            "Q8008274", // William E. McLellin
            "Q6232186", // John F. Boynton
            "Q6230870", // John Edward Page
            "Q15516821", // Lyman Wight
            "Q5423417", // Ezra T. Benson
            "Q5076017", // Charles C. Rich
            "Q5491440", // Franklin D. Richards
            "Q6172733", // Jedediah M. Grant
            "Q5217392", // Daniel H. Wells
            "Q947083", // George Q. Cannon
            "Q4967308", // Brigham Young, Jr.
            "Q15505516", // John Willard Young
            "Q14711657", // Joseph Angell Young
            "Q4709888", // Albert Carrington
            "Q15512281", // John Willard Young
            "Q4253174", // Moses Thatcher
            "Q6238946", // Francis M. Lyman
            "Q5545112", // John Henry Smith
            "Q6262572", // George Teasdale
            "Q3731101", // John W. Taylor
            "Q6772964", // Erastus Snow
            "Q4771912", // Marriner W. Merrill
            "Q4668883", // Anthon H. Lund
            "Q41505357", // Abraham H. Cannon
            "Q3617629", // Ann Eliza Young
            "Q24068890", // Mary Elizabeth Rollins Lightner
            "Q5213763", // Dan Jones
            "Q109959409", // Lucinda Pendleton Morgan Harris         
        ];

        foreach ($qids as $qid) {
            
            $PersonController->improve($qid);
            
        }

    }
}
