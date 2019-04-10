# Simple Behat example
The `behat.yml` file is configured to run with a Selenium hub and node setup. In my case I run the behat tests inside a `Vagrant box` but on my host I had the Selenium node running with the `chromedriver`.

## Useful commands
```bash
# Vagrant box
java -jar selenium-server-standalone-3.3.1.jar -role hub

# Host
java -Dwebdriver.chrome.driver="chromedriver.exe" -jar selenium-server-standalone-3.141.59.jar -role node -hub "http://10.0.3.35:4444/grid/register/"

# Init environment
php composer.phar install

# Run tests
vendor/bin/behat -v -c behat.yml features

# Add missing functions
vendor/bin/behat --dry-run --append-snippets
```

## Credits
The form ind therefore the credits are taken from this [repo](https://github.com/RobDWaller/behat-selenium-chrome).
