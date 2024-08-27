# Setup

Setup a new directory for the project and enter the directory

```bash
mkdir squad-demo
cd squad-demo
```

Install the Squad package
```
composer require smaameri/squad:dev-main
```

Create a new file `index.php` and with the following code
```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Squad\ChatOpenAI;

$chat = new ChatOpenAI(getenv('OPENAI_API_KEY'));
$response = $chat->sendMessage('Hello, world!');

var_dump($response);
```

Now export your OpenAI API key
```bash
export OPENAI_API_KEY=sk-...
```

You are now ready to run the script
```bash
php index.php
string(34) "Hello! How can I assist you today?"
```

