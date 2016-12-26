# purdue-cru

## Install

Ensure that you have:
- PHP >=5.6
- MySQL 5.6 (Try installing with Homebrew)
- [WP CLI](https://wp-cli.org/)

### Configure a local Virtual Host
Follow this great walkthrough on how to setup a Virtual Host: https://davidwalsh.name/create-virtual-host

_Make sure that you have added the vhost and the development URL to your hosts file (`/etc/hosts`)_

### Setup your DB
- Create a new database called `purdue_wp`
- Create a new user with all schema privlages for `purdue_wp`

### Configure WordPress
- Copy the `env.sample` to `.env.php`
- Fill our the `$local` information using the username/password that you created

### Install WP
Fill out this command with your information:
`wp core install --url=purdue.dev --title="Purdue Cru" --admin_user=purdue --admin_password=admin --admin_email=you@whatever.com`
