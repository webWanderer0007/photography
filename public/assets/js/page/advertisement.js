"use strict";
var ajaxDtADPost;
$(function () {
  var addEditor = new Quill("#description-editor", {
    bounds: "#description-editor",
    placeholder: "Type Something...",
    modules: {
      formula: !0,
      toolbar: [
        [
          {
            font: [],
          },
          {
            size: [],
          },
        ],
        ["bold", "italic", "underline", "strike"],
        [
          {
            color: [],
          },
          {
            background: [],
          },
        ],
        [
          {
            script: "super",
          },
          {
            script: "sub",
          },
        ],
        [
          {
            header: "1",
          },
          {
            header: "2",
          },
          "blockquote",
          "code-block",
        ],
        [
          {
            list: "ordered",
          },
          {
            list: "bullet",
          },
          {
            indent: "-1",
          },
          {
            indent: "+1",
          },
        ],
        [
          {
            direction: "rtl",
          },
        ],
        ["link", "image", "video", "formula"],
        ["clean"],
      ],
    },
    theme: "snow",
  });

  var editEditor = new Quill("#edit-description-editor", {
    bounds: "#edit-description-editor",
    placeholder: "Type Something...",
    modules: {
      formula: !0,
      toolbar: [
        [
          {
            font: [],
          },
          {
            size: [],
          },
        ],
        ["bold", "italic", "underline", "strike"],
        [
          {
            color: [],
          },
          {
            background: [],
          },
        ],
        [
          {
            script: "super",
          },
          {
            script: "sub",
          },
        ],
        [
          {
            header: "1",
          },
          {
            header: "2",
          },
          "blockquote",
          "code-block",
        ],
        [
          {
            list: "ordered",
          },
          {
            list: "bullet",
          },
          {
            indent: "-1",
          },
          {
            indent: "+1",
          },
        ],
        [
          {
            direction: "rtl",
          },
        ],
        ["link", "image", "video", "formula"],
        ["clean"],
      ],
    },
    theme: "snow",
  });

  if ($("#ajaxDtADPost").length) {
    ajaxDtADPost = $("#ajaxDtADPost").DataTable({
      dom: `<"row me-2"<"col-md-2"<"me-3"l>><"col-md-10"<"dt-action-buttons text-xl-end text-lg-start text-md-end text-start d-flex align-items-center justify-content-end flex-md-row flex-column mb-3 mb-md-0"fB>>>t<"row mx-2"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>`,
      lengthMenu: [
        [25, 50, 70, 100],
        [25, 50, 70, 100],
      ],
      buttons: [
        {
          text: '<i class="ti ti-plus me-0 me-sm-1 ti-xs"></i><span class="d-none d-sm-inline-block">Post AD</span>',
          className: "add-new btn btn-primary",
          attr: {
            "data-bs-toggle": "modal",
            "data-bs-target": "#addNewADModal",
          },
        },
      ],
      keys: !0,
      language: {
        paginate: {
          previous: "<i class='fa-solid fa-angle-left'></i>",
          next: "<i class='fa-solid fa-angle-right'></i>",
        },
      },
      drawCallback: function () {
        $(".dataTables_paginate > .pagination").addClass("pagination-rounded");
      },
      responsive: true,
      destroy: true,
      processing: true,
      serverSide: true,
      lengthChange: true,
      stateSave: true,
      searching: false,
      serverMethod: "post",
      ajax: {
        url: "ad-post/ajax-get-ad-posts",
        data: function (data) {
          return {
            data: data,
            "x-token": $("[name='x-token']").val(),
          };
        },
        dataSrc: function (data) {
          $("[name='x-token']").val(data.hash);
          return data.aaData;
        },
      },
      ordering: false,
      columns: [
        { data: "slNo" },
        { data: "image" },
        { data: "title", class: "text-wrap" },
        { data: "status" },
        { data: "created_at" },
        { data: "action" },
      ],
    });
  }

  $("#addADForm").on("submit", function (e) {
    e.preventDefault();
    let main = $(this),
      btn = main.find('[type="submit"]'),
      btnHtml = "Submit";

    const formData = new FormData(main[0]);
    formData.append("description", addEditor.root.innerHTML);
    $.ajax({
      url: main.attr("action"),
      type: "POST",
      data: formData,
      async: true,
      beforeSend: function () {
        btn
          .prop("disabled", true)
          .html(
            '<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...'
          );
        main.find(".invalid-feedback").html("");
      },
      success: function (data) {
        if (data.success) {
          $("[name='x-token']").val(data.hash);
          $("#addNewADModal").modal("hide");
          editEditor.root.innerHTML = "";
          showToast("Success", data.message, "success");
          ajaxDtADPost.draw();
        } else {
          $("[name='x-token']").val(data.hash);
          if (typeof data.message != "undefined" && data.message != "") {
            showToast("Warning!", data.message, "warning");
          }
          $.each(data.errors, function (index, value) {
            main
              .find('[name="' + index + '"], ' + index)
              .siblings("div.invalid-feedback")
              .text(value)
              .show();
          });
        }
      },
      error: function (response) {
        btn.prop("disabled", false).html(btnHtml);
      },
      complete: function (data, status, xhr) {
        btn.prop("disabled", false).html(btnHtml);
      },
      dataType: "json",
      cache: false,
      contentType: false,
      processData: false,
    });
  });

  $(document).on("click", ".edit-ad", async function (e) {
    e.preventDefault();
    let id = $(this).attr("data-id"),
      gender;
    $(".invalid-feedback").html("");
    const response = await fetch(
      adminUrl + `ad-post/fetch-ad-post-details/${id}`
    );
    const data = await response.json();
    if (data.success) {
      $("#editADForm").find("[name='old_image']").val(data.row.oldImage);
      $("#editADForm").find("[name='id']").val(data.row.id);
      $("#editADForm").find("[name='title']").val(data.row.title);
      editEditor.root.innerHTML = data.row.description;
      $("#editADForm").find(".imageHolder").attr("src", data.row.image);

      $("#editADModal").modal("show");
    } else {
      showToast("Warning!", data.message, "warning");
    }
  });

  $("#editADForm").on("submit", function (e) {
    e.preventDefault();
    let main = $(this),
      btn = main.find('[type="submit"]'),
      btnHtml = "Submit";

    const formData = new FormData(main[0]);
    formData.append("description", editEditor.root.innerHTML);
    $.ajax({
      url: main.attr("action"),
      type: "POST",
      data: formData,
      async: true,
      beforeSend: function () {
        btn
          .prop("disabled", true)
          .html(
            '<span class="spinner-border me-1" role="status" aria-hidden="true"></span> Loading...'
          );
        main.find(".invalid-feedback").html("");
      },
      success: function (data) {
        if (data.success) {
          $("[name='x-token']").val(data.hash);
          $("#editADModal").modal("hide");
          showToast("Success", data.message, "success");
          ajaxDtADPost.draw();
        } else {
          $("[name='x-token']").val(data.hash);
          if (typeof data.message != "undefined" && data.message != "") {
            showToast("Warning!", data.message, "warning");
          }
          $.each(data.errors, function (index, value) {
            main
              .find('[name="' + index + '"], ' + index)
              .siblings("div.invalid-feedback")
              .text(value)
              .show();
          });
        }
      },
      error: function (response) {
        btn.prop("disabled", false).html(btnHtml);
      },
      complete: function (data, status, xhr) {
        btn.prop("disabled", false).html(btnHtml);
      },
      dataType: "json",
      cache: false,
      contentType: false,
      processData: false,
    });
  });

  $(document).on("click", ".delete-ad", function (e) {
    e.preventDefault();
    let id = $(this).attr("data-id");

    Swal.fire({
      title: "Are you sure?",
      text: "You won't be able to revert this!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, delete it!",
      customClass: {
        confirmButton: "btn btn-warning me-3",
        cancelButton: "btn btn-label-secondary",
      },
      buttonsStyling: false,
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: adminUrl + "ad-post/delete-ad",
          method: "POST",
          data: { id, "x-token": $("[name='x-token']").val() },
          success: function (response) {
            $("[name='x-token']").val(response.hash);
            if (response.success) {
              ajaxDtADPost.draw();
              showToast("Success", response.message, "success");
            }
          },
        });
      }
    });
  });

  $(document).on("click", ".change-status", function (e) {
    e.preventDefault();
    let id = $(this).attr("data-id"),
      status = $(this).attr("data-val");
    Swal.fire({
      title: "Are you sure?",
      text: `You want to ${status} this AD post`,
      icon: "warning",
      showCancelButton: true,
      confirmButtonText: "Yes, change!",
      customClass: {
        confirmButton: "btn btn-success me-3",
        cancelButton: "btn btn-label-secondary",
      },
      buttonsStyling: false,
    }).then((result) => {
      if (result.isConfirmed) {
        $.ajax({
          url: adminUrl + "ad-post/change-status",
          method: "GET",
          data: { id, status },
          success: function (response) {
            if (response.success) {
              ajaxDtADPost.draw();
              showToast("Success", response.message, "success");
            } else {
              showToast("Error", response.message, "error");
            }
          },
        });
      }
    });
  });
});
