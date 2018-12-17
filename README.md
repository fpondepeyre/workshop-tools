# TOOLS

## PHP Coding Standards Fixer
https://github.com/FriendsOfPhp/PHP-CS-Fixer

```bash
# install
composer require --dev friendsofphp/php-cs-fixer
```

```bash
# Run php-cs-fixer
./vendor/bin/php-cs-fixer fix
```

## PHP Static Analysis Tool
https://github.com/phpstan/phpstan
https://github.com/phpstan/phpstan-strict-rules
https://github.com/phpstan/phpstan-doctrine
https://github.com/phpstan/phpstan-symfony

```bash
# install
composer require --dev phpstan/phpstan
composer require --dev phpstan/phpstan-strict-rules
composer require --dev phpstan/phpstan-doctrine
composer require --dev phpstan/phpstan-symfony
```

```bash
# Run phpstan
./vendor/bin/phpstan analyse src --level=7
```

## A PHP code-quality tool
https://github.com/phpro/grumphp

```bash
# install
composer require --dev phpro/grumphp
```

```
# docs
https://github.com/phpro/grumphp/blob/master/doc/tasks/phpcpd.md
https://github.com/phpro/grumphp/blob/master/doc/tasks/phpcsfixer2.md
https://github.com/phpro/grumphp/blob/master/doc/tasks/phpstan.md
https://github.com/phpro/grumphp/blob/master/doc/tasks/phplint.md
https://github.com/phpro/grumphp/blob/master/doc/tasks/git_commit_message.md
https://github.com/phpro/grumphp/blob/master/doc/tasks/git_blacklist.md
```

```
# Run grumphp
php vendor/bin/grumphp run
```

## Copy/Paste Detector (CPD) for PHP code.
https://github.com/sebastianbergmann/phpcpd

```bash
# install
composer require --dev sebastian/phpcpd
```

```
# Run phpcpd
./vendor/bin/phpcpd src --min-tokens=1 --min-lines=1
```

## This tool check syntax of PHP files faster than serial check with fancier output.
https://github.com/JakubOnderka/PHP-Parallel-Lint

```bash
# install
composer require --dev jakub-onderka/php-parallel-lint
```

```
# Run grumphp
./vendor/bin/parallel-lint -j 10 src
```

## Scalable user load testing tool written in Python
https://github.com/locustio/locust
```
python -m pip install locustio
locust --help
locust -f simple.py --host=http://127.0.0.1:8000
```
## SpeedCurve
https://speedcurve.com
