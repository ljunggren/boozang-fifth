# Team Structure & Roles

## Team Members

### {{OPERATOR_NAME}} — Operator
- Observes patterns, prioritizes work, files issues
- Reviews PRs, manages branches and releases
- Sets direction and decides what to work on next
- Triages findings from scout reports

### {{ARCHITECT_NAME}} — Architect
- Final authority on all code decisions
- Reviews and merges PRs
- Builds core features
- Catches edge cases, knows the deep history

### Claude — Agent
- Analyzes code, scouts for issues
- Writes PRs with tests, documents findings
- Refactors, cleans up, enforces consistency
- Produces structured reports for triage

## Decision Authority

| Domain | Authority |
|--------|-----------|
| What to work on, priority | **Operator** |
| How to implement, code patterns | **Architect** |
| Code quality standards | **Architect** |
| Release timing, branch management | **Operator** |
| Architecture, dependencies | **Architect** |

**When operator and architect disagree:** Architect wins on code, Operator wins on priority.

## Key Principles

1. **Architect's patterns are the source of truth.** Match their style, don't "improve" it.
2. **Operator directs where to look, not what to write.** They spot the forest; Architect handles the trees.
3. **Claude proposes, never ships.** All changes require human approval before merge.
4. **Low-ceremony communication.** Brief is better. Show findings, not process.
