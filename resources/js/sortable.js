import Sortable from "sortablejs";

export function sortable() {
    const list = document.getElementById("links-list");
    let timeout;

    if (list) {
        new Sortable(list, {
            animation: 150,
            ghostClass: "opacity-50",

            onEnd: function () {
                clearTimeout(timeout);

                timeout = setTimeout(() => {
                    const items = list.querySelectorAll("[data-id]");

                    const order = Array.from(items).map((el, index) => ({
                        id: el.dataset.id,
                        position: index,
                    }));

                    document.getElementById("order-input").value =
                        JSON.stringify(order);

                    document.getElementById("reorder-form").submit();
                }, 800);
            },
        });
    }
}
