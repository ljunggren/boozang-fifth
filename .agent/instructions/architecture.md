# Architecture & Patterns

## Technology Stack

- **CMS**: WordPress (latest)
- **Web Server**: Nginx (reverse proxy + static files)
- **Runtime**: PHP 8.1 FPM
- **Database**: MySQL (local on management server)
- **SSL**: Let's Encrypt via Certbot
- **OS**: Ubuntu 22.04 LTS
- **Infrastructure**: Ansible (managed in `../bz-deploy`)

## Server

- **Host**: mgmt1bh.boozang.com (management server, Bahrain)
- **WordPress path**: `/var/www/html/` (standard WordPress install)
- **Nginx config**: managed by `nginx-wp` Ansible role
- **PHP-FPM**: PHP 8.1 with MySQL and GD extensions

## Deployment

WordPress on the management server is provisioned by `../bz-deploy`:
- `management-setup.sh` — full server setup (Nginx, PHP, MySQL, WordPress)
- `apps.yml` — deploys companion sites (thelab, portfolio, docs)

Content and theme changes are managed through WordPress admin.
