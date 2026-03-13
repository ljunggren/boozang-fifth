# Agent Project Template

A reusable template for bootstrapping AI agent infrastructure in any project. Based on battle-tested patterns from production projects.

## Quick Start

1. Copy the template into your project:
   ```bash
   cp -r agent-template/.agent /path/to/your/project/
   cp -r agent-template/.readonly /path/to/your/project/
   cp agent-template/CLAUDE.md /path/to/your/project/
   cat agent-template/.gitignore.template >> /path/to/your/project/.gitignore
   ```

2. Find and replace placeholders:
   ```bash
   cd /path/to/your/project
   grep -r "{{" .agent/ CLAUDE.md
   ```

3. Fill in project-specific sections marked with `<!-- TODO: Fill in -->`.

## Placeholders

| Placeholder | Description | Example |
|-------------|-------------|---------|
| `{{PROJECT_NAME}}` | Project name | `my-app` |
| `{{PROJECT_DESCRIPTION}}` | One-line description | `A React dashboard for analytics` |
| `{{GH_USER}}` | GitHub username | `ljunggren` |

## What's Included

| Directory | Purpose |
|-----------|---------|
| `.agent/instructions/` | Rules and conventions for the AI agent |
| `.agent/flows/` | Mermaid decision diagrams for common workflows |
| `.agent/context/` | Project overview and domain knowledge |
| `.agent/memory/` | Journal and anti-patterns log (grows over time) |
| `.agent/session/` | Cross-session handoff (gitignored) |
| `.readonly/` | Protected specs and ADRs (agent cannot modify) |
| `CLAUDE.md` | Quick reference for Claude Code |

## Optional Add-ons

These are not included by default but can be added for specific use cases:

- **Worklog** (`.agent/memory/worklog.md`): Hour tracking for consulting engagements.
- **IDE configs** (`.cursor/`, `.vscode/`): IDE-specific agent rules. Add as needed.
- **Troubleshooting entries** (`.agent/instructions/troubleshooting.md`): Starts empty — populate as issues arise.

## Structure

```
.agent/
├── README.md                    # What this directory is
├── instructions.md              # Entry point (links to all files)
├── instructions/
│   ├── general.md               # Tone, git, hygiene
│   ├── architecture.md          # Tech stack, patterns
│   ├── commands.md              # Session commands
│   ├── operation.md             # Scripts, ports, deployment
│   ├── testing.md               # Test framework, patterns
│   ├── documentation.md         # README standards, diagrams
│   ├── ignore.md                # Gitignore standards
│   ├── readonly-policy.md       # .readonly/ rules
│   ├── troubleshooting.md       # Common issues
│   └── wellbeing.md             # Fatigue awareness, session health
├── flows/
│   ├── README.md                # Flow index
│   ├── session.md               # Start → work → end lifecycle
│   ├── code-change.md           # Should I modify this?
│   ├── commit.md                # When and how to commit
│   ├── escalation.md            # Ask vs proceed
│   └── troubleshooting.md       # Debug decision trees
├── context/
│   └── project-context.md       # Project overview
├── memory/
│   ├── journal.md               # Session work log
│   └── anti-patterns.md         # Failures and prevention
└── session/
    └── sync.md                  # Cross-session handoff (gitignored)
```
