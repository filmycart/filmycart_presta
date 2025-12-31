<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('hi-IN', array (
  'AdminActions' => 
  array (
    'Activate selection' => 'सक्रिय चयनित करें',
    'Collapse' => 'संक्षिप्त करें',
    'Configure' => 'विन्यस्त करें',
    'Create' => 'बनाएँ',
    'Deactivate selection' => 'असक्रिय चयनित करें',
    'Display' => 'प्रदर्शन',
    'Download' => 'डाउनलोड',
    'Duplicate selection' => 'नक़ली चयन',
    'Expand' => 'विस्तृत करें',
    'Filter by categories' => 'फ़िल्टर श्रेणियों के द्वारा',
    'Refresh' => 'पुनश्चर्या',
    'Save image settings' => 'छवि सेटिंग्स सुरक्षित करे',
    'Search name' => 'नाम खोजें',
    'Select' => 'चुनें',
    'Try again' => 'फिर कोशिश करो',
    'Unselect' => 'अनसिलेक्ट करें',
  ),
  'AdminAdvparametersFeature' => 
  array (
    '%class_name% addition' => '%class_name% के अतिरिक्त',
    'Combination reference' => 'संयोजन सन्दर्भ',
    'Delivery time of out-of-stock products with allowed orders:' => 'स्वीकार्य आर्डरो वाले आउट-ऑफ-स्टॉक उत्पादों का डिलीवरी समय:',
    'Download' => 'डाउनलोड',
    'Encryption:' => 'एन्क्रिप्शन:',
    'History of uploaded files' => 'अपलोड की गयी फाईलों का इतिहास',
    'Hours (x,y,z...)' => 'घंटे (एक्स, वाई, जेड...)',
    'Image alt texts (x,y,z...)' => 'छवि alt संदेश (x,y,z...)',
    'Latitude' => 'अक्षांश',
    'Logistician' => 'प्रचालन तंत्र विशेषग्य',
    'Longitude' => 'देशांतर',
    'Maximum size for attached files' => 'संलग्न फाइलों के लिए अधिकतम आकार',
    'Multi-front optimizations' => 'बहु पक्षीय अनुकूलन',
    'MySQL name:' => 'MySQL नाम',
    'MySQL server:' => 'MySQL सर्वर',
    'MySQL user:' => 'MySQL प्रयोगकर्ता',
    'MySQL version:' => 'MySQL संस्करण',
    'None' => 'कुछ नहीं',
    'PHP version:' => 'PHP संस्करण:',
    'Price per unit' => 'प्रति इकाई मूल्य',
    'SMTP password:' => 'एसऍमटीपी पासवर्ड:',
    'SMTP server:' => 'एसऍमटीपी सर्वर:',
    'SMTP username:' => 'एसऍमटीपी प्रयोक्ता नाम:',
    'Salesman' => 'विक्रेता',
    'Select a file to import' => 'आयत करने के लिए फाइल चुनें',
    'Send emails to' => 'को ईमेल भेजें',
    'Send notification email' => 'अधिसूचना ईमेल भेजें',
    'Set the resource permissions for this key:' => 'इस कुंजी की संसाधन अनुमति निश्चित करें',
    'Store contacts' => 'स्टोर संपर्कों',
    'Store information' => 'दुकान की जानकारी',
    'SuperAdmin' => 'महाव्यवस्थापक',
    'Tax rule ID' => 'कर नियम आईडी',
    'Titles' => 'शीर्षक',
    'Translator' => 'अनुवादक',
    'What do you want to import?' => 'आप क्या आयात करना चाहते हैं?',
  ),
  'AdminAdvparametersHelp' => 
  array (
    'Allowed formats: .csv, .xls, .xlsx, .xlst, .ods, .ots' => 'मान्य फॉर्मेट: .csv, .xls, .xlsx, .xlst, .ods, .ots',
    'Click here to display the URLs of the %name% shop' => '%name% दुकान के यूआरएल को दिखने के लिए यहाँ क्लिक करें',
    'Click here to display the shops in the %name% shop group' => '%name% दुकान ग्रुप में दुकानों को दिखने के लिए यहाँ क्लिक करें',
    'Define the upload limit for a downloadable product (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).' => 'संलग्न फाइलों के लिए अधिकतम आकार निश्चित करें (मेगाबाइट्स में). यह आकार आपके सर्वर द्वारा प्रदत्त अधिकतम फाइल साइज़ से कम या बराबर होना चाहिए (वर्तमान में: %size% MB)',
    'Define the upload limit for an image (in megabytes). This value has to be lower or equal to the maximum file upload allotted by your server (currently: %size% MB).' => 'छवि के लिए अधिकतम आकार निश्चित करें (मेगाबाइट्स में). यह आकार आपके सर्वर द्वारा प्रदत्त अधिकतम फाइल साइज़ से कम या बराबर होना चाहिए (वर्तमान में: %size% MB)',
    'Password should be at least %num% characters long.' => 'पासवर्ड कम से कम %num% अक्षर लंबा होना चाहिए।',
    'Should be enabled if you want to avoid to store the smarty cache on NFS.' => 'अगर आप एनऍफ़एस पर मौजूद स्मार्ट कैश को अनदेखा करना चाहते हैं तो आपको इसे सक्षम करना चाहिए|',
    'You can read information on import at:' => 'आप आयात पर जानकारी पढ़ सकते हैं:',
    'https://en.wikipedia.org/wiki/Comma-separated_values' => 'https://en.wikipedia.org/wiki/Comma-separated_values',
  ),
  'AdminAdvparametersNotification' => 
  array (
    '"%key%" is an unauthorized keyword.' => '"%key%" एक अनधिकृत कीवर्ड है।',
    'Data imported!' => 'डेटा आयात हो गया!',
    'Do you really want to remove the server %serverIp%:%serverPort% ?' => 'क्या आप वास्तव में सर्वर %serverIp%:%serverPort% को मिटाना चाहते हैं ?',
    'If not,[1][2] please click here[/1]!' => 'यदि [१][२] नही तो कृपया यहाँ क्लिक करें[/१]!',
    'Your file has been successfully imported into your shop. Don\'t forget to re-build the products\' search index.' => 'आपकी दुकान में आपकी फाइल सफलतापूर्वक आयातित कर दी गयी है. उत्पादों की खोज सूची को दुबारा से तैयार करना न भूलें.',
  ),
  'AdminCatalogFeature' => 
  array (
    '%group_name% - All people who have created an account on this site.' => '%group_name% - इस वेबसाइट पर खाता बनाने वाले सभी लोग।',
    '%group_name% - All people without a valid customer account.' => '%group_name% - वो सभी लोग जो वैध ग्राहक खाते के बिना हैं।',
    '%group_name% - Customer who placed an order with the guest checkout.' => '%group_name% - ऐसा ग्राहक जिसने अतिथि के रूप में आदेश स्थापित किया हो।',
    'Adjustment following an inventory of stock' => 'स्टॉक की एक वस्तुसूची में किये गये समायोजन',
    'Bulk edit quantity' => 'बल्क सम्पादन मात्रा',
    'Combination name' => 'संयोजन नाम',
    'Delivered within 3-4 days' => '३-४ दिन के अंदर वितरित',
    'Delivered within 5-7 days' => '५-७ दिन के अंदर वितरित',
    'Delivery time of in-stock products:' => 'स्टॉक में उपलब्ध उत्पादों का डिलीवरी समय:',
    'Delivery time of out-of-stock products with allowed orders:' => 'स्वीकार्य आर्डरो वाले आउट-ऑफ-स्टॉक उत्पादों का डिलीवरी समय:',
    'Display products below low stock level first' => 'सबसे पहले कम स्टॉक वाले उत्पादों को दिखाएँ',
    'Export data into CSV' => 'सीएसवी में डेटा आयात करें',
    'Filter by status' => 'स्थिति द्वारा फिल्टर',
    'Go to the import system' => 'आयात प्रणाली पर जाएँ',
    'Low stock alert:' => 'निम्न स्टॉक चेतावनी:',
    'Low stock level' => 'निम्न स्टॉक स्तर',
    'Low stock level:' => 'निम्न स्टॉक स्तर:',
    'Manual Entry' => 'मौखिक प्रविष्टि',
    'None' => 'कुछ नहीं',
    'Price per unit' => 'प्रति इकाई मूल्य',
    'Reserved quantity' => 'आरक्षित मात्रा',
    'Send me an email when the quantity is below or equals this level' => 'जब मात्रा इस लेबल से कम अथवा बराबर हो तो एक ईमेल भेजें',
    'This product is below the low stock level you have defined.' => 'यह उत्पाद निर्धारित किये गये निम्न स्टॉक स्तर से कम है।',
    'Use checkboxes to bulk edit quantities' => 'थोक की मात्रा को सम्पादित करने के लिए चेकबॉक्स का प्रयोग करें',
  ),
  'AdminCatalogHelp' => 
  array (
    'Display delivery time for a product is advised for merchants selling in Europe to comply with the local laws.' => 'यूरोप में व्यापार करने वाले व्यापारियों को सलाह है कि वितरण समय को दिखाने से पहले ध्यान रखें कि यह वहां के स्थानीय नियमो का पालन करना हो।',
    'Per kilo, per litre' => 'प्रति किलो, प्रति लीटर',
    'Search name' => 'नाम खोजें',
    'The minimum quantity required to buy this product (set to 1 to disable this feature). E.g.: if set to 3, customers will be able to purchase the product only if they take at least 3 in quantity.' => 'इस उत्पाद को खरीदने के लिए आवश्यक न्यूनतम मात्रा (इस सुविधा को अक्षम करने के लिए 1 से 1)। जैसे: यदि 3 पर सेट किया जाता है, तो ग्राहक केवल उत्पाद खरीदने में सक्षम होंगे यदि वे कम से कम 3 मात्रा में लेते हैं।',
    'Upload a brand logo from your computer.' => 'अपने कंप्यूटर से एक ब्रांड लोगो अपलोड करें।',
  ),
  'AdminCatalogNotification' => 
  array (
    'No address has been found for this brand.' => 'इस ब्रांड के लिए कोई पता नहीं पाया गया है।',
    'No product matches your search. Try changing search terms.' => 'कोई भी उत्पाद आपकी खोज से मेल नहीं खाता है। खोज शब्द बदलने का प्रयास करें।',
    'This value is too long. It should have %limit% characters or less.' => 'यह मान बहुत लंबा है। इसमें %limit% वर्ण या उससे कम होनी चाहिए।%limit%',
  ),
  'AdminDashboardHelp' => 
  array (
    'Choose a fixed fee for each order placed in %currency% with %module%.' => '%module% के साथ %currency% में रखे गए प्रत्येक आदेश के लिए एक निश्चित शुल्क चुनें।',
    'Choose a fixed fee for each order placed with a foreign currency with %module%.' => '%module% के साथ %currency% में रखे गए प्रत्येक आदेश के लिए एक निश्चित शुल्क चुनें।',
    'Choose a variable fee for each order placed in %currency% with %module%. It will be applied on the total paid with taxes.' => '%module% के साथ %currency% में रखे गए प्रत्येक आदेश के लिए एक चर शुल्क चुनें। यह करों के साथ भुगतान किए गए कुल पर लागू किया जाएगा।',
    'Choose a variable fee for each order placed with a foreign currency with %module%. It will be applied on the total paid with taxes.' => '%module% के साथ विदेशी मुद्रा के साथ रखे गए प्रत्येक आदेश के लिए एक चर शुल्क चुनें। यह करों के साथ भुगतान किए गए कुल पर लागू किया जाएगा।',
  ),
  'AdminDesignFeature' => 
  array (
    'Pages' => 'पृष्ठ',
  ),
  'AdminGlobal' => 
  array (
    'Back' => 'वापस',
    'Configure' => 'विन्यस्त करें',
    'Country' => 'देश',
    'First name' => 'प्रथम नाम',
    'Last name' => 'अंतिम नाम',
    'Latitude' => 'अक्षांश',
    'Longitude' => 'देशांतर',
    'Maintenance' => 'रखरखाव',
    'Next' => 'अगला',
    'No' => 'नहीं',
    'None' => 'कुछ नहीं',
    'Pages' => 'पृष्ठ',
    'Password' => 'पासवर्ड',
    'Search name' => 'नाम खोजें',
    'Visits' => 'यात्राओं',
    'Year' => 'वर्ष',
    'Yes' => 'हां',
  ),
  'AdminInternationalFeature' => 
  array (
    'Country' => 'देश',
  ),
  'AdminLoginFeature' => 
  array (
    'Reset password' => 'पासवर्ड रीसेट करें',
    'Reset your password' => 'अपना पासवर्ड रीसेट करें',
    'Send reset link' => 'रीसेट लिंक भेजें',
  ),
  'AdminLoginNotification' => 
  array (
    'You can reset your password every %interval% minute(s) only. Please try again later.' => 'आप अपना पासवर्ड हर %interval% मिनट (केवल) रीसेट कर सकते हैं| बाद में पुन: प्रयास करें।',
  ),
  'AdminModulesActions' => 
  array (
    'Configure' => 'विन्यस्त करें',
  ),
  'AdminModulesFeature' => 
  array (
    '%nbModules% modules to configure' => '%nbModules% मॉड्यूल विन्यस्त करने के लिए',
    '%nbModules% modules to update' => '%nbModules% मॉड्यूल अद्यतन करने के लिए',
    'Configure' => 'विन्यस्त करें',
    'Disable module?' => 'मॉड्यूल अक्षम करें?',
    'Installed modules' => 'स्थापित मॉड्यूल',
    'Modules to configure' => 'कॉन्फ़िगर करने के लिए मॉड्यूल',
    'Optional: delete module folder after uninstall.' => 'वैकल्पिक: स्थापना हटाने के बाद मॉड्यूल फ़ोल्डर हटाएँ।',
    'Reset module?' => 'मॉड्यूल रीसेट?',
    'See all results for your search on' => 'अपनी खोज के लिए सभी परिणाम देखें',
    'Service by %author%' => '%author% द्वारा सेवा',
    'Show all modules' => 'सभी मॉड्यूल दिखाएँ',
    'Uninstall module?' => 'स्थापना रद्द करें मॉड्यूल?',
    'Upload a module' => 'मॉड्यूल अपलोड करें',
    'Yes, I want to do it' => 'हां, मैं यह करना चाहता हूं',
    'Yes, disable it' => 'ठीक है, उसे अक्षम करें',
    'Yes, reset it' => 'हां, इसे रीसेट करें',
    'Yes, uninstall it' => 'हां, अनइंस्टॉल करें',
    'v%version% - by %author%' => '%author% द्वारा - v%version%',
  ),
  'AdminNavigationHeader' => 
  array (
    'Customer name:' => 'ग्राहक का नाम:',
    'Installed modules' => 'स्थापित मॉड्यूल',
    'Your profile' => 'आपका प्रोफाइल',
  ),
  'AdminNavigationMenu' => 
  array (
    'Advanced Parameters' => 'उन्नत मापदंडों',
    'Catalog Price Rules' => 'सूची मूल्य नियम',
    'Combinations Generator' => 'संयोग जनरेटर',
    'Configure' => 'विन्यस्त करें',
    'Credit Slips' => 'साख परची',
    'Customer Service' => 'ग्राहक सेवा',
    'Delivery Slips' => 'वितरण परची',
    'E-mail' => 'ई-मेल',
    'Files' => 'फ़ाइलें',
    'Localization' => 'स्थानीयकरण',
    'Login' => 'लॉगिन',
    'Maintenance' => 'रखरखाव',
    'Marketing' => 'विपणन',
    'Module notifications' => 'मॉड्यूल सूचनाएं',
    'Monitoring' => 'निगरानी',
    'Order Messages' => 'आर्डर संदेश',
    'Outstanding' => 'बकाया',
    'Pages' => 'पृष्ठ',
    'Positions' => 'स्थान',
    'Preferences' => 'प्राथमिकताएं',
    'SEO & URLs' => 'एसइओ और यूआरएल',
    'Shop URLs' => 'दुकान यूआरएल',
    'Shopping Carts' => 'शॉपिंग कार्ट',
    'Statuses' => 'स्थितियों',
    'Titles' => 'शीर्षक',
    'Translations' => 'अनुवाद',
  ),
  'AdminNavigationNotification' => 
  array (
    'Your shop is in debug mode.' => 'अपनी दुकान डिबग मोड में है।',
  ),
  'AdminNotificationsError' => 
  array (
    'You do not have permission to create this.' => 'आपको इसे बनाने की अनुमति नहीं है।',
  ),
  'AdminOrderscustomersFeature' => 
  array (
    'None' => 'कुछ नहीं',
  ),
  'AdminOrderscustomersNotification' => 
  array (
    'Direct link' => 'सीधी कडी',
  ),
  'AdminShopparametersFeature' => 
  array (
    'Shop name' => 'दुकान का नाम',
    'Titles' => 'शीर्षक',
    'Visits' => 'यात्राओं',
  ),
  'AdminShopparametersHelp' => 
  array (
    'Delivered within 3-4 days' => '३-४ दिन के अंदर वितरित',
    'Delivered within 5-7 days' => '५-७ दिन के अंदर वितरित',
  ),
  'AdminStatsFeature' => 
  array (
    '%average% hours' => '%average% घंटे',
    '%percentage%% Female Customers' => '%percentage% महिला ग्राहको',
    '%percentage%% Male Customers' => '%percentage% पुरुष ग्राहको',
    '%percentage%% Neutral Customers' => '%percentage% तटस्थ ग्राहको',
    '%value% years' => '%value% साल',
    '%value%% of your Catalog' => 'आपके कैटलॉग का %value%',
  ),
  'AdminStatsHelp' => 
  array (
    '%value% of your products are disabled and not visible to your customers' => 'आपके उत्पादों का %value% अक्षम है और आपके ग्राहकों को दिखाई नहीं दे रहा है|',
    '%value% of your products for sale are out of stock.' => 'बिक्री के लिए आपके उत्पादों का %value% स्टॉक से बाहर है|',
    'Gross margin expressed in percentage assesses how cost-effectively you sell your goods. Out of $100, you will retain $%value% to cover profit and expenses.' => 'प्रतिशत में व्यक्त कुल मार्जिन का आकलन कैसे लागत प्रभावी ढंग से आप अपने माल बेचते हैं  $१०० से, आप लाभ और व्यय को कवर करने के लिए $%value% को बनाए रखेंगे|',
    'Within your catalog, %value% of your products have had sales in the last 30 days' => 'आपके कैटलॉग में, आपके उत्पादों के %value% ने पिछले ३० दिनों में बिक्री की थी',
  ),
  'EmailsBody' => 
  array (
    'Password' => 'पासवर्ड',
  ),
  'Install' => 
  array (
    '"%class%" must be an instance of "InstallXmlLoader"' => '"%class%" का एक उदाहरण होना चाहिए "InstallXmlLoader"',
    '%file% file is not writable (check permissions)' => '%file% फ़ाइल लेखन योग्य नहीं है (अनुमतियों की जांच करें)',
    '%folder% folder is not writable (check permissions)' => '%folder% फ़ाइल लेखन योग्य नहीं है (अनुमतियों की जांच करें)',
    'An SQL error occurred for entity <i>%entity%</i>: <i>%message%</i>' => 'इकाई के लिए एक एसक्यूएल त्रुटि उत्पन्न हुई <i>%entity%</i>: <i>%message%</i>',
    'An error occurred during installation...' => 'स्थापना के दौरान एक त्रुटि हुई...',
    'At least one table with same prefix was already found, please change your prefix or drop your database' => 'एक ही टेबल के साथ कम से कम एक तालिका पहले से ही मिली थी, कृपया अपना टेबल बदलें या अपना डेटाबेस गिराऐ|',
    'Attempt to create the database automatically' => 'स्वचालित रूप से डेटाबेस बनाने का प्रयास',
    'Back' => 'वापस',
    'Back Office' => 'पिछला कार्यालय',
    'Blog' => 'ब्लॉग',
    'Cannot convert database data to utf-8' => 'डेटाबेस डेटा को यूटीएफ-८ में परिवर्तित नहीं किया जा सकता',
    'Cannot copy flag language "%flag%"' => 'झंडा भाषा "%flag%" कॉपी नहीं कर सकता',
    'Cannot create admin account' => 'व्यवस्थापक खाता नहीं बनाया जा सकता',
    'Cannot create group shop' => 'समूह की दुकान बना नहीं सकते',
    'Cannot create image "%1$s" for entity "%2$s"' => 'इकाई "%2$s" के लिए छवि "%1$s" नहीं बना सकते',
    'Cannot create image "%identifier%"' => 'छवि "%identifier%" नहीं बना सकते',
    'Cannot create image "%identifier%" (bad permissions on folder "%folder%")' => 'छवि "%identifier%" (फ़ोल्डर "%folder%" पर खराब अनुमतियां) नहीं बना सकता',
    'Cannot create image "%identifier%" for entity "%entity%"' => 'इकाई "%entity%" के लिए छवि "%identifier%" नहीं बना सकते',
    'Cannot create new files and folders' => 'नई फ़ाइलें और फ़ोल्डर नहीं बना सकते',
    'Cannot create shop' => 'दुकान नहीं बना सकते',
    'Cannot create shop URL' => 'दुकान यूआरएल नहीं बना सकता',
    'Cannot download language pack "%iso%"' => 'भाषा पैक "%iso%" को डाउनलोड नहीं किया जा सकता',
    'Cannot install language "%iso%"' => 'भाषा "%iso%" स्थापित नहीं की जा सकती',
    'Cannot install module "%module%"' => 'मॉड्यूल "%module%" स्थापित नहीं किया जा सकता',
    'Cannot open external URLs (requires allow_url_fopen as On)' => 'बाह्य यूआरएल नहीं खोल सकते हैं (अनुमति के लिए allow_url_fopen को ऑन करें)',
    'Cannot upload files' => 'फ़ाइलें अपलोड नहीं की जा सकतीं',
    'Cannot write app/config/parameters.yml file' => 'App/config/parameters.yml फ़ाइल नहीं लिख सकते',
    'Choose your language' => 'अपनी भाषा चुनें',
    'Configure your database by filling out the following fields' => 'निम्नलिखित क्षेत्रों को भर कर अपने डेटाबेस को कॉन्फ़िगर करे',
    'Connection to MySQL server succeeded, but database "%database%" not found' => 'मायएसक्युएल सर्वर से कनेक्शन सफल हुआ, लेकिन डेटाबेस "%database%" नहीं मिला',
    'Continue the installation in:' => 'इसमें स्थापना जारी रखें:',
    'Country' => 'देश',
    'Create default shop and languages' => 'डिफ़ॉल्ट दुकान और भाषाओं को बनाएं',
    'Create file parameters' => 'फ़ाइल पैरामीटर बनाएं',
    'Database Server is not found. Please verify the login, password and server fields' => 'डेटाबेस सर्वर नहीं मिला है कृपया लॉगिन, पासवर्ड और सर्वर फ़ील्ड सत्यापित करें',
    'Database is connected' => 'डाटाबेस से जुड़ा हुआ है',
    'Database is created' => 'डेटाबेस बनाया गया है',
    'Database login' => 'डेटाबेस लॉगिन',
    'Database name' => 'डेटाबेस का नाम',
    'Database password' => 'डेटाबेस पासवर्ड',
    'Database server address' => 'डेटाबेस सर्वर पता',
    'Database structure file not found' => 'डेटाबेस संरचना फ़ाइल नहीं मिली',
    'Discover your store' => 'अपनी दुकान की खोज करें',
    'Discover your store as your future customers will see it!' => 'अपने दुकान की आविष्कार के रूप में अपने भविष्य के ग्राहकों को यह देखेंगे!',
    'Display' => 'प्रदर्शन',
    'Documentation' => 'प्रलेखन',
    'Dom extension is not loaded' => 'Dom extension लोड नहीं किया गया है',
    'Done!' => 'सफलता!',
    'E-mail' => 'ई-मेल',
    'Field required' => 'आवश्यक क्षेत्र',
    'File "language.xml" not found for language iso "%iso%"' => 'फ़ाइल "language.xml" भाषा आईएसओ "%iso%" के लिए मान्य नहीं है',
    'File "language.xml" not valid for language iso "%iso%"' => 'फ़ाइल "language.xml" भाषा आईएसओ "%iso%" के लिए मान्य नहीं है',
    'Fileinfo extension is not enabled' => 'Fileinfo एक्सटेंशन सक्षम नहीं है',
    'Files' => 'फ़ाइलें',
    'First name' => 'प्रथम नाम',
    'Fixtures class "%class%" not found' => 'फिक्स्चर कलास "%class%" नहीं मिला',
    'For security purposes, you must delete the "install" folder.' => 'सुरक्षा कारणों से, आपको "install" फ़ोल्डर भी हटाना होगा।',
    'Front Office' => 'प्रमुख कार्यालय',
    'GD library is not installed' => 'जीडी लाइब्रेरी स्थापित नहीं है',
    'GZIP compression is not activated' => 'GZIP compression सक्रिय नहीं है',
    'Information about your Store' => 'अपने दुकान के बारे में जानकारी',
    'Installation Assistant' => 'स्थापना सहायक',
    'Invalid shop name' => 'अमान्य दुकान नाम',
    'JSON extension is not loaded' => 'JSON एक्सटेंशन लोड नहीं किया गया है',
    'Last name' => 'अंतिम नाम',
    'License Agreements' => 'लाइसेंस अनुबंध',
    'License agreements' => 'लाइसेंस अनुबंध',
    'Manage your store' => 'अपने दुकान का प्रबंधन',
    'Mbstring extension is not enabled' => 'Mbstring एक्सटेंशन सक्षम नहीं है',
    'Must be at least 8 characters' => 'कम से कम ८ वर्ण होना चाहिए',
    'Next' => 'अगला',
    'No' => 'नहीं',
    'Not all files were successfully uploaded on your server' => 'आपके सर्वर पर सभी फ़ाइलों को सफलतापूर्वक अपलोड नहीं किया गया था',
    'PDO MySQL extension is not loaded' => 'PDO MySQL एक्सटेंशन लोड नहीं किया गया है',
    'PHP OpenSSL extension is not loaded' => 'PHP OpenSSL विस्तार लोड नहीं किया गया है',
    'Password' => 'पासवर्ड',
    'Permissions on files and folders' => 'फ़ाइलों और फ़ोल्डरों पर अनुमतियां',
    'Please complete the fields below in order for PrestaShop to connect to your database.' => 'कृपया अपने डेटाबेस से कनेक्ट होने के लिए प्रेस्ताशोप के लिए नीचे दिए गए फ़ील्ड को पूरा करें।',
    'Please remember your login information:' => 'कृपया अपनी लॉगिन जानकारी याद रखें:',
    'Print my login information' => 'मेरी लॉगिन जानकारी प्रिंट करें',
    'Re-type to confirm' => 'पुष्टि करने के लिए फिर से लिखें',
    'Recursive write permissions for %user% user on %folder%' => '%folder% पर %user% उपयोगकर्ता के लिए लिखने की अनुमति',
    'Required Apache configuration' => 'आवश्यक अपाचे कॉन्फ़िगरेशन',
    'SQL error on query <i>%query%</i>' => 'कवेरि पर एसक्यूएल त्रुटि <i>%query%</i>',
    'Server name is not valid' => 'सर्वर नाम मान्य नहीं है',
    'Shop password' => 'दुकान पासवर्ड',
    'SimpleXML extension is not loaded' => 'SimpleXML एक्सटेंशन लोड नहीं किया गया है',
    'Store information' => 'दुकान की जानकारी',
    'System compatibility' => 'प्रणाली अनुकूलता',
    'System configuration' => 'सिस्टम कॉन्फ़िगरेशन
	',
    'Tables prefix' => 'टेबल उपसर्ग',
    'Tables prefix is invalid' => 'तालिकाओके उपसर्ग अमान्य है',
    'Test your database connection now!' => 'अब अपने डेटाबेस कनेक्शन का परीक्षण करें!',
    'The default port is 3306. To use a different port, add the port number at the end of your server\'s address i.e ":4242".' => 'डिफ़ॉल्ट पोर्ट ३३०६ है। एक अलग पोर्ट का उपयोग करने के लिए, अपने सर्वर के पते के अंत में पोर्ट नंबर जोड़ें उ.दा ": ४२४२"।',
    'The field %field% is limited to %limit% characters' => 'क्षेत्र %field% %limit% वर्णों तक सीमित है',
    'The language selection above only applies to the Installation Assistant. Once your store is installed, you can choose the language of your store from over %d% translations, all for free!' => 'उपरोक्त भाषा चयन केवल स्थापना सहायक पर लागू होता है आपकी दुकान स्थापित होने के बाद, आप अपने स्टोर की भाषा %d% से अधिक अनुवादों में से चुन सकते हैं, सभी के लिए निःशुल्क!',
    'The password and its confirmation are different' => 'नया पासवर्ड और पुष्टिकरण अलग',
    'The password is incorrect (must be alphanumeric string with at least 8 characters)' => 'पासवर्ड ग़लत है (कम से कम ८ वर्णों वाला अल्फ़ान्यूमेरिक स्ट्रिंग होना चाहिए)',
    'This e-mail address is invalid' => 'ई-मेल एड्रेस गलत है।',
    'Welcome to the PrestaShop %version% Installer' => 'प्रेस्ताशोप %version% इंस्टॉलर में आपका स्वागत है',
    'Write permissions for %user% user on %folder%' => '%folder% पर %user% उपयोगकर्ता के लिए लिखने की अनुमति',
    'Yes' => 'हां',
    'You can use the links on the left column to go back to the previous steps, or restart the installation process by <a href="%link%">clicking here</a>.' => 'आप पिछले चरणों पर वापस जाने के लिए बाएं कॉलम के लिंक का उपयोग कर सकते हैं या <a href="%link%"> यहां क्लिक करके </a> स्थापना प्रक्रिया को पुनरारंभ कर सकते हैं।',
    'You must enter a database login' => 'आपको डेटाबेस लॉगिन दर्ज करना होगा',
    'You must enter a database name' => 'आपके लिए डेटाबेस नाम डालना आवश्यक है',
    'Your Account' => 'आपका खाता',
    'Your database login does not have the privileges to create table on the database "%s". Ask your hosting provider:' => 'डेटाबेस "%s" पर तालिका बनाने के लिए आपके डेटाबेस लॉगिन में विशेषाधिकार नहीं हैं। अपने होस्टिंग प्रदाता से पूछें:',
    'Your firstname contains some invalid characters' => 'आपके प्रथम नाम में कुछ अमान्य वर्ण हैं',
    'Your installation is finished!' => 'आपका स्थापना समाप्त हो गया है!',
    'ZIP extension is not enabled' => 'ZIP एक्सटेंशन सक्षम नहीं है',
    'cURL extension is not enabled' => 'cURL एक्सटेंशन सक्षम नहीं है',
    'https://enable-javascript.com/' => 'https://enable-javascript.com/',
    'shop name' => 'दुकान का नाम',
  ),
  'ModulesBlockreassuranceAdmin' => 
  array (
    'Display' => 'प्रदर्शन',
    'None' => 'कुछ नहीं',
  ),
  'ModulesBlockwishlistAdmin' => 
  array (
    'Refresh' => 'पुनश्चर्या',
  ),
  'ModulesBlockwishlistShop' => 
  array (
    'Next' => 'अगला',
  ),
  'ModulesContactformAdmin' => 
  array (
    'By default, you will only receive contact messages through your Customer service tab.' => 'डिफ़ॉल्ट रूप से, आपको केवल अपने ग्राहक सेवा टैब के माध्यम से संपर्क संदेश प्राप्त होंगे।',
    'Choose Yes and your customers will receive a generic confirmation email including a tracking number after their message is sent. Note: to discourage spam, the content of their message won\'t be included in the email.' => 'हां चुनें और आपके ग्राहकों को उनके संदेश भेजे जाने के बाद एक ट्रैकिंग नंबर सहित एक सामान्य पुष्टि ईमेल प्राप्त होगा। नोट: स्पैम को हतोत्साहित करने के लिए, उनके संदेश की सामग्री ईमेल में शामिल नहीं की जाएगी।',
    'Receive customers\' messages by email' => 'ईमेल द्वारा ग्राहकों के संदेश प्राप्त करें',
    'Send confirmation email to your customers' => 'अपने ग्राहकों को पुष्टिकरण ईमेल भेजें',
  ),
  'ModulesContactinfoShop' => 
  array (
    'Contact us' => 'संपर्क',
  ),
  'ModulesDashactivityAdmin' => 
  array (
    'Abandoned cart (max)' => 'दुश्चरित्र कार्ट अधिकतम',
    'Abandoned cart (min)' => 'दुश्चरित्र कार्ट न्यूनतम',
    'Active cart' => 'सक्रिय कार्ट',
    'Activity overview' => 'गतिविधि अवलोकन',
    'Dashboard Activity' => 'डैशबोर्ड गतिविधि',
    'New Messages' => 'नए संदेश',
    'Online visitor' => 'ऑनलाइन परिदर्शक',
    'Product Reviews' => 'उत्पाद समीक्षा',
    'Traffic' => 'यातायात',
    'Traffic Sources' => 'परिवहन स्रोत',
    'Unique Visitors' => 'एकमात्र दर्शक',
    'Visits' => 'यात्राओं',
    'hrs' => 'घंटे',
  ),
  'ModulesDashgoalsAdmin' => 
  array (
    'Traffic' => 'यातायात',
  ),
  'ModulesFaviconnotificationboAdmin' => 
  array (
    'Display notifications in the browser tab for:' => 'ब्राउज़र टैब में नोटिफिकेशन प्रदर्शित करें:',
  ),
  'ModulesGAnalyticsAdmin' => 
  array (
    'Yes' => 'हां',
    'No' => 'नहीं',
    'Use this option to anonymize the visitor’s IP to comply with data privacy laws in some countries' => 'कुछ देशों में डेटा गोपनीयता कानूनों का अनुपालन करने के लिए विज़िटर के आईपी को अनामित करने के लिए इस विकल्प का उपयोग करें',
    'Settings for Anonymize IP updated successfully' => 'अज्ञात आईपी के लिए सेटिंग्स सफलतापूर्वक अपडेट किया गया',
  ),
  'ModulesGoogleanalyticsAdmin' => 
  array (
    'No' => 'नहीं',
    'Use this option to anonymize the visitor’s IP to comply with data privacy laws in some countries' => 'कुछ देशों में डेटा गोपनीयता कानूनों का अनुपालन करने के लिए विज़िटर के आईपी को अनामित करने के लिए इस विकल्प का उपयोग करें',
    'Yes' => 'हां',
  ),
  'ModulesProductcommentsAdmin' => 
  array (
    'No' => 'नहीं',
    'Yes' => 'हां',
  ),
  'ModulesProductcommentsShop' => 
  array (
    'No' => 'नहीं',
    'Yes' => 'हां',
  ),
  'ModulesSharebuttonsShop' => 
  array (
    'Pinterest' => 'पिंटरेस्ट',
    'Tweet' => 'ट्वीट',
  ),
  'ModulesSocialfollowShop' => 
  array (
    'LinkedIn' => 'लिंक्डइन',
    'Pinterest' => 'पिंटरेस्ट',
  ),
  'ModulesWelcomeAdmin' => 
  array (
    'Let\'s create your first product' => 'चलिए आपका पहला उत्पाद बनाते हैं।',
    'Forum' => 'मंच',
    'Next' => 'अगला',
  ),
  'ShopFormsErrors' => 
  array (
    'Invalid name' => 'अमान्य नाम',
  ),
  'ShopFormsHelp' => 
  array (
    'Your message here' => 'आपका संदेश यहाँ लिखें',
  ),
  'ShopFormsLabels' => 
  array (
    'Country' => 'देश',
    'First name' => 'प्रथम नाम',
    'Last name' => 'अंतिम नाम',
    'Password' => 'पासवर्ड',
  ),
  'ShopNavigation' => 
  array (
    'Contact us' => 'संपर्क',
    'Login' => 'लॉगिन',
  ),
  'ShopNotificationsError' => 
  array (
    'An error occurred with your account, which prevents us from updating the new password. Please report this issue using the contact form.' => 'आपके खाते में एक त्रुटि हुई, जो हमें नया पासवर्ड अपडेट करने से रोकती है। कृपया संपर्क फ़ॉर्म का उपयोग करके इस मुद्दे की रिपोर्ट करें।',
    'Could not delete address.' => 'पता हटा नहीं सका',
    'Invalid email/password combination' => 'अमान्य ईमेल / पासवर्ड संयोजन',
    'Password is required' => 'पासवर्ड आवश्यक है',
    'Please fix the error below.' => 'कृपया नीचे दिए गए त्रुटि ठीक करें।',
    'Please provide the required information' => 'कृपया सभी आवश्यक जानकारी प्रदान करें',
    'The email is already used, please choose another one or sign in' => 'ईमेल पहले से ही उपयोग किया जा रहा है, कृपया एक और चुनें या साइन इन करें',
    'The password change request expired. You should ask for a new one.' => 'पासवर्ड परिवर्तन अनुरोध समाप्त हो गया। आपको एक नया पूछना चाहिए।',
    'This voucher is not combinable with an other voucher already in your cart: %s' => 'यह वाउचर पहले से ही आपके कार्ट में एक अन्य वाउचर के साथ संयोज्य नहीं है: %s',
    'We cannot regenerate your password with the data you\'ve submitted' => 'हम आपके द्वारा सबमिट किए गए डेटा के साथ अपना पासवर्ड पुन: उत्पन्न नहीं कर सकते हैं',
    'You cannot use this voucher on products on sale' => 'आप बिक्री पर उत्पादों पर इस वाउचर का उपयोग नहीं कर सकते हैं',
    'You must add %quantity% minimum quantity' => 'आपको %quantity% न्यूनतम मात्रा जोड़नी होगी',
  ),
  'ShopNotificationsSuccess' => 
  array (
    'Information successfully updated.' => 'सूचना सफलतापूर्वक अपडेट की गई।',
    'Your guest account has been successfully transformed into a customer account. You can now log in as a registered shopper.' => 'आपका अतिथि खाता सफलतापूर्वक ग्राहक खाते में बदल दिया गया है। अब आप एक पंजीकृत दुकानदार के रूप में लॉग इन कर सकते हैं।',
    'Your password has been successfully reset and a confirmation has been sent to your email address: %s' => 'आपका पासवर्ड सफलतापूर्वक रीसेट कर दिया गया है और आपके ईमेल पते पर एक पुष्टिकरण भेजा गया है:
 %s',
  ),
  'ShopNotificationsWarning' => 
  array (
    'You cannot place a new order from your country (%s).' => 'आप अपने देश (%s) से एक नया आर्डर नहीं दे सकते।',
    'You cannot return merchandise with a guest account.' => 'आप अतिथि खाते के साथ व्यापार वापस नहीं कर सकते हैं।',
  ),
  'ShopPdf' => 
  array (
    'For more assistance, contact Support:' => 'अधिक सहायता के लिए समर्थन से संपर्क करें:',
    'Payment Method' => 'भुगतान पद्धति',
  ),
  'ShopThemeActions' => 
  array (
    'Download' => 'डाउनलोड',
    'Next' => 'अगला',
    'Send reset link' => 'रीसेट लिंक भेजें',
  ),
  'ShopThemeCatalog' => 
  array (
    'Pages' => 'पृष्ठ',
  ),
  'ShopThemeCustomeraccount' => 
  array (
    'Reset your password' => 'अपना पासवर्ड रीसेट करें',
  ),
  'ShopThemeGlobal' => 
  array (
    'Back' => 'वापस',
    'Contact us' => 'संपर्क',
    'Next' => 'अगला',
    'No' => 'नहीं',
    'None' => 'कुछ नहीं',
    'Store information' => 'दुकान की जानकारी',
    'Yes' => 'हां',
  ),
  'messages' => 
  array (
    '%' => '%',
    'Country' => 'देश',
    'Display' => 'प्रदर्शन',
    'Group:' => 'समूह:',
  ),
));

$catalogueHi = new MessageCatalogue('hi', array (
));
$catalogue->addFallbackCatalogue($catalogueHi);
$catalogueDefault = new MessageCatalogue('default', array (
));
$catalogueHi->addFallbackCatalogue($catalogueDefault);

return $catalogue;
