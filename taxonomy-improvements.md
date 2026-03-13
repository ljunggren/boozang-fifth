# Improvement Taxonomy

A reusable classification system for scanning a codebase and prioritizing improvements.

## Axes

### Module

Where the improvement lives. Adapt values to your project.

| Value | Scope |
|-------|-------|
| framework | Core engine, view system, shared primitives |
| main | Application logic, UI, editors, panels |
| infrastructure | Server, scripts, build, deployment |
| configuration | Config files, middleware, environment setup |

### Type

What kind of improvement it is.

| Value | Meaning |
|-------|---------|
| bugfix | Broken behavior, race conditions, null-safety |
| feature | New capability |
| performance | Speed, memory, render efficiency |
| refactor | Code quality, maintainability, deduplication |
| test | Missing or inadequate test coverage |

### Ease of Implementation

How easy the change is to make. Higher = easier.

| Label | Score | Meaning |
|-------|-------|---------|
| high | 3 | Quick, isolated, single-file change |
| medium | 2 | Moderate effort, few files touched |
| low | 1 | Significant effort, cross-cutting concern |

### Impact

How much value the improvement delivers. Higher = more valuable.

| Label | Score | Meaning |
|-------|-------|---------|
| high | 3 | User-visible, stability, or major DX improvement |
| medium | 2 | Moderate UX or developer experience gain |
| low | 1 | Minor, cosmetic, or edge-case only |

## Priority

**Priority = ease x impact** (range 1-9)

| Priority | Ease | Impact | Action |
|----------|------|--------|--------|
| 9 | high (3) | high (3) | Do first — low-hanging fruit |
| 6 | high (3) | medium (2) | Quick wins |
| 6 | medium (2) | high (3) | Worth the effort |
| 3 | low (1) | high (3) | Plan carefully |
| 3 | high (3) | low (1) | If time permits |
| 1 | low (1) | low (1) | Skip or defer |

## Output Format

When scanning a codebase, produce a table sorted by priority descending:

```markdown
| # | Title | Module | Type | Ease | Impact | Pri | Description |
|---|-------|--------|------|------|--------|-----|-------------|
| 1 | ... | framework | perf | 3 | 3 | 9 | ... |
| 2 | ... | main | bugfix | 3 | 2 | 6 | ... |
```
