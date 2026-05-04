import "./bootstrap";

import { loading } from "./loading";
import { openModal } from "./modal";
import { sortable } from "./sortable";

document.addEventListener("DOMContentLoaded", () => {
    sortable();
    openModal();
    loading();
});
