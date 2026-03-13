# .agent/

AI agent configuration and memory for {{PROJECT_NAME}}.

## Purpose

This directory provides structured context, rules, and memory for AI coding agents (Claude Code, Cursor, etc.) working on this project.

## Structure

- **instructions/** — Rules and conventions the agent must follow
- **flows/** — Mermaid decision diagrams for common workflows
- **context/** — Project overview, domain knowledge
- **memory/** — Journal, anti-patterns (grows over time)
- **session/** — Cross-session handoff scratchpad (gitignored)

## Entry Point

Start with [`instructions.md`](./instructions.md) — it links to everything.
