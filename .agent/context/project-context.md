# Project Context — bz-homepage

## Overview

Boozang homepage (https://boozang.com) — WordPress site for the Boozang test automation platform. Hosted on the management server (mgmt1bh.boozang.com) in Beauharnois (OVH Canada).

## Domain

Boozang is a test automation platform. The homepage serves as the public-facing marketing/product site. Other Boozang domains:
- **ai.boozang.com** — Production app (Bahrain)
- **eu.boozang.com** — Production app (Frankfurt)
- **staging-bh.boozang.com** — Staging
- **thelab.boozang.com** — Demo/lab site
- **docs.boozang.com** — Documentation
- **portfolio.boozang.com** — Portfolio

## Key Concepts

- **Management server** — mgmt1bh.boozang.com, runs WordPress + Nginx + PHP-FPM + MySQL
- **bz-deploy** — Ansible repo (`../bz-deploy`) that provisions and deploys all Boozang infrastructure
- **WordPress stack** — PHP 8.1 FPM, MySQL (db: `wordpress`, user: `wordpress`), Nginx with Let's Encrypt SSL

## External Dependencies

- **MySQL** — local on management server (WordPress database)
- **Nginx** — reverse proxy / web server with Let's Encrypt SSL
- **PHP-FPM 8.1** — WordPress runtime
- **Let's Encrypt** — SSL certificates (email: administrator@boozang.com)
- **bz-deploy Ansible roles** — `nginx-wp`, `php`, `mysql`, `wordpress` roles handle provisioning

## Current Status

WordPress is live at boozang.com. Infrastructure managed via `../bz-deploy` (Ansible).
