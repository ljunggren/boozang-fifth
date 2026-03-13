# CLAUDE.md

bz-homepage — Boozang homepage (boozang.com) WordPress site

## Instructions

See `.agent/instructions.md` for all operational instructions, architecture, and conventions.

## Session Commands

| Command | Action |
|---------|--------|
| `start session` | Read sync file + instructions, check journal, remind context |
| `end session` | Update sync file, summarize work, update journal |

## Escalation Levels

- **L0 — Autonomous:** Reading files, fixing typos, formatting templates. Just do it.
- **L1 — Proceed, tell me:** Updating template content, improving examples, editing documentation. Do it, but explain what changed.
- **L2 — Propose first:** Changing the template structure, adding new instruction categories, modifying flow diagrams. Show the plan first.
- **L3 — Full stop:** Changes that would propagate to all repos using this template. Stop and wait for approval.
