#!/usr/bin/env bash

git clone https://github.com/StanAngeloff/vagrant-shell-scripts.git ~/repos

sudo cp /etc/php.ini.default /etc/php.ini

echo "Created php.ini"

<%= import '~/repos/vagrant-shell-scripts/ubuntu.sh' %>

php-settings-update 'date.timezone' 'America/Los_Angeles'

echo "Timezone Set to America/Los_Angeles"

echo "bash provision complete!"