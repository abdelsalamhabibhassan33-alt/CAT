Teta Clarisse
25/32819
# Product Planning & Flow Design
**Role:** Product Planner & Flow Controller

---

## 1. Real User
**Musanze Service Desk Operator:** A local operator in the Musanze District responsible for managing rapid service deployments.

## 2. Problem Being Solved
Currently, potato aggregators, event organizers at INES, and home-stay owners struggle to:
* Quickly register and track participants.
* Confirm order values without clear cost estimates.
* Maintain reliable records, often relying on scattered WhatsApp messages and paper.

## 3. System Solution
A single web application that captures service requests, calculates costs automatically, and stores data in a database for real-time accountability.

## 4. Data Fields (Used by ALL services)
To ensure consistency, the system captures:
* **Client:** Name of the person making the request.
* **Service:** Type of service (Potato Order, Event Ticket, or Home-stay Booking).
* **Quantity:** Number of units requested.
* **Price:** Cost per unit.
* **Total:** Automatically calculated (Quantity × Price).

## 5. Expected Screen Outputs
The interface provides:
* **Live Total Preview:** Instant calculation as the user types.
* **Success Message:** Feedback when a record is saved to MySQL.
* **Records Table:** A visual display of all submitted daily operations.

---
**Status:** Implementation Blueprint Ready.