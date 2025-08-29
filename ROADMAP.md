# Roadmap

## Foundations
**Goal:** Get the app scaffolded with basic auth & client area.
- Project setup (Laravel + Filament)
- Database design (users, clients, invoices, services)
- Client registration & login
- Admin login + roles/permissions
- Profile management (update name, email, password)
- Setup GitHub repo, issues, CI/CD pipeline

**Deliverable:** A working app where clients can sign up and log in, and admins can log in separately.

---

## Billing Core
**Goal:** Enable invoicing and payments.
- Manual invoice creation (admin)
- Client can view/download invoices
- Payment gateway integration (Stripe, PayPal)
- Credit balance (funds deposit + apply to invoices)
- Automated invoice email notifications
- Transaction history

**Deliverable:** Clients can receive invoices and pay them. Admins can see paid/unpaid status.

---

## Products & Services
**Goal:** Clients can order products and admins can manage them.
- Product catalog (hosting, SaaS, VPS, etc.)
- Configurable options (RAM, disk, SSL, etc.)
- Cart + checkout flow
- Admin product management (CRUD)
- Service lifecycle (active, suspended, terminated)
- Automation hooks (placeholder for provisioning APIs)

**Deliverable:** Clients can order products, admins can approve/manage lifecycle.

---

## Domains Module
**Goal:** Add domain functionality.
- Domain search (WHOIS integration or placeholder API)
- Register/transfer domain workflows
- Renewal reminders
- Nameserver & DNS management (basic)
- Pricing table for TLDs

**Deliverable:** Clients can search, register, and manage domains.

---

## Support System
**Goal:** Add support channels.
- Ticketing system (open, reply, close tickets)
- Ticket priorities & attachments
- Admin ticket assignment & notes
- Knowledgebase CRUD (admin) + client view
- Announcements module

**Deliverable:** Clients can open support tickets; admins can reply/manage them.

---

## Automation & Reports
**Goal:** Automate daily tasks + basic analytics.
- Cron job for recurring billing & overdue suspension
- Automated email reminders (due invoices, renewals, suspensions)
- Admin dashboard (total revenue, active clients, unpaid invoices)
- Logs & audit trail (who did what)

**Deliverable:** System can run billing automatically & provide insights to admin.

