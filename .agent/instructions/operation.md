# Operation & DevOps

**IMPORTANT: Always use project scripts for all operations. Never run tools directly if a script exists. If a script doesn't exist for what you need, add one.**

## Where to Run Commands

Infrastructure commands are run from `../bz-deploy`. WordPress admin is accessed via https://boozang.com/wp-admin/.

## Scripts (in ../bz-deploy)

```bash
# Management server setup (includes WordPress):
scripts/management-setup.sh

# Deploy companion apps (thelab, portfolio, docs):
ansible-playbook -i inventories/management-bh apps.yml
```

## Ports

| Service | Port |
|---------|------|
| Nginx HTTP | 80 |
| Nginx HTTPS | 443 |
| MySQL | 3306 (local only) |
| SSH | 22 |

## Environment Configuration

WordPress is configured via `wp-config.php` on the server. Database credentials are managed through the `../bz-deploy` Ansible inventory (`inventories/management-bh`).

## Deployment Verification

After any deploy, always verify:

1. **Flush logs first** — clear old output before reading
2. **Check startup output** — confirm the app loaded the correct config
3. **Verify the running artifact** — make sure the deployed code matches what you built
4. **Test the health endpoint** — don't just check process status, hit the actual API
5. **Read error logs after flush** — only trust errors from the current process

### Deployment Order

Always deploy in this order:
1. **Staging** — deploy and verify functionality
2. **Wait for verification** — smoke tests, manual checks, or automated tests
3. **Production** — only after staging is confirmed working

Never skip staging, even for "simple" changes.

## Prerequisites

<!-- TODO: Fill in -->
