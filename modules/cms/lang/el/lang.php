<?php
/* Greek Language Updated on 2015-07-11 v1.03 */
return [
    'cms_object' => [
        'invalid_file' => 'Μη έγκυρο όνομα αρχείου: :name. Τα ονόματα αρχείων μπορούν να περιέχουν μόνο αλφαριθμητικά σύμβολα, κάτω παύλες, παύλες και τελείες. Μερικά παραδείγματα σωστών ονομάτων αρχείων: page.htm, page, subdirectory/page',
        'invalid_property' => "Η ιδιότητα ':name' δεν μπορεί να οριστεί.",
        'file_already_exists' => "Το αρχείο ':name' υπάρχει ήδη.",
        'error_saving' => "Σφάλμα κατά την αποθήκευση του αρχείου ':name'. Παρακαλούμε ελέγξτε τα δικαιώματα εγγραφής.",
        'error_creating_directory' => 'Σφάλμα δημιουργίας του καταλόγου :name. Παρακαλούμε ελέγξτε τα δικαιώματα εγγραφής.',
        'invalid_file_extension'=>'Μη έγκυρη επέκταση αρχείου: :invalid. Οι επιτρεπόμενες επεκτάσεις είναι: :allowed.',
        'error_deleting' => "Σφάλμα διαγράφης του αρχείου ':name' του προτύπου. Παρακαλούμε ελέγξτε τα δικαιώματα εγγραφής.",
        'delete_success' => 'Τα πρότυπα τα οποία διαγράφηκαν επιτυχώς: :count.',
        'file_name_required' => 'Το πεδίο του Ονόματος του Αρχείου είναι υποχρεωτικό.',
    ],
    'theme' => [
        'not_found_name' => "Το θέμα ':name' δεν βρέθηκε.",
        'active' => [
            'not_set' => 'Δεν έχει οριστεί το ενεργό θέμα.',
            'not_found' => 'Δεν βρέθηκε το ενεργό θέμα.',
        ],
        'edit' => [
            'not_set' => 'Δεν έχει οριστεί το θέμα επεξεργασίας.',
            'not_found' => 'Δεν βρέθηκε το θέμα επεξεργασίας.',
            'not_match' => "Το αντικείμενο το οποίο προσπαθείτε να προσπελάσετε δεν ανήκει στο θέμα το οποίο επεξεργάζεστε. Παρακαλούμε φορτώστε ξανά την σελίδα.",
        ],
        'settings_menu' => 'Θέμα Front-End',
        'settings_menu_description' => 'Προεπισκόπηση των εγκατεστημένων θεμάτων και επιλογή του ενεργού θέματος.',
        'default_tab' => 'Ιδιότητες',
        'name_label' => 'Όνομα',
        'name_create_placeholder' => 'Νέο όνομα θέματος',
        'author_label' => 'Δημιουργός',
        'author_placeholder' => 'Άτομο ή όνομα εταιρίας',
        'description_label' => 'Περιγραφή',
        'description_placeholder' => 'Περιγραφή θέματος',
        'homepage_label' => 'Αρχική σελίδα',
        'homepage_placeholder' => 'URL Ιστοσελίδας',
        'code_label' => 'Κωδικας',
        'code_placeholder' => 'Ένας μοναδικός κωδικός για το θέμα ο οποίος χρησιμοποιείται για διανομή.',
        'dir_name_label' => 'Όνομα καταλόγου',
        'dir_name_create_label' => 'Ο κατάλογος προορισμού του θέματος',
        'theme_label' => 'Θέμα',
        'theme_title' => 'Θέματα',
        'activate_button' => 'Ενεργοποίηση',
        'active_button' => 'Ενεργοποίηση',
        'customize_theme' => 'Προσαρμογή Θέματος',
        'customize_button' => 'Προσαρμογή',
        'duplicate_button' => 'Διπλότυπο',
        'duplicate_title' => 'Διπλότυπο θέματος',
        'duplicate_theme_success' => 'Επιτυχής δημιουργία του διπλοτύπου θέματος!',
        'manage_button' => 'Διαχείριση',
        'manage_title' => 'Διαχείριση θέματος',
        'edit_properties_title' => 'Θέμα',
        'edit_properties_button' => 'Επεξεργασία ιδιοτήτων',
        'save_properties' => 'Αποθήκευση ιδιοτήτων',
        'import_button' => 'Εισαγωγή',
        'import_title' => 'Εισαγωγή θέματος',
        'import_theme_success' => 'Επιτυχής εισαγωγή του θέματος!',
        'import_uploaded_file' => 'Αρχείο αρχειοθέτησης θέματος.',
        'import_overwrite_label' => 'Αντικαταστήσετε τα υπάρχοντα αρχεία',
        'import_overwrite_comment' => 'Απόεπιλέξτε αυτό το πλαίσιο ελέγχου για την εισαγωγή μόνο των νέων αρχείων',
        'import_folders_label' => 'Κατάλογοι',
        'import_folders_comment' => 'Παρακαλούμε επιλέξτε τους καταλόγους του θέματος που θέλετε να εισαγάγετε',
        'export_button' => 'Εξαγωγή',
        'export_title' => 'Εξαγωγή θέματος',
        'export_folders_label' => 'Κατάλογοι',
        'export_folders_comment' => 'Παρακαλούμε επιλέξτε τους καταλόγους του θέματος που θέλετε να εξάγετε',
        'delete_button' => 'Διαγραφή',
        'delete_confirm' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτό το θέμα; Αυτό δεν μπορεί να ανευρεθεί!',
        'delete_active_theme_failed' => 'Δεν μπορεί να διαγραφεί το ενεργό θέμα, προσπαθήστε να ενεργοποιήστε πρώτα εάν άλλο θέμα.',
        'delete_theme_success' => 'Επιτυχής διαγραφή θέματος!',
        'create_title' => 'Δημιουργία θέματος',
        'create_button' => 'Δημιουργία',
        'create_new_blank_theme' => 'Δημιουργία ενός νέου κενού θέματος',
        'create_theme_success' => 'Το θέμα δημιουργήθηκε επιτυχώς!',
        'create_theme_required_name' => 'Παρακαλούμε ορίστε ένα όνομα για το θέμα.',
        'new_directory_name_label' => 'Κατάλογος θέματος',
        'new_directory_name_comment' => 'Δώστε ένα νέο όνομα καταλόγου για το διπλότυπο θέμα.',
        'dir_name_invalid' => 'Το όνομα μπορεί να περιέχει μόνο ψηφιά, Λατινικά γράμματα και τα ακόλουθα σύμβολα: _-',
        'dir_name_taken' => 'Ο επιθυμητός κατάλογος για το θέμα υπάρχει ήδη.',
        'find_more_themes' => 'Εύρεση περισσοτέρων θεμάτων',
        'saving' => 'Αποθήκευση θέματος...',
        'return' => 'Επιστροφή στην λίστα θεμάτων',
    ],
    'maintenance' => [
        'settings_menu' => 'Λειτουργία συντήρησης',
        'settings_menu_description' => 'Διαμορφώστε τη σελίδα λειτουργίας συντήρησης και εναλλάξτε την ρύθμιση.',
        'is_enabled' => 'Ενεργοποίηση λειτουργίας συντήρησης',
        'is_enabled_comment' => 'Όταν ενεργοποιηθεί, οι επισκέπτες τις ιστοσελίδας θα δουν την σελίδα που έχει επιλεγεί παρακάτω.',
    ],
    'page' => [
        'not_found_name' => "Η σελίδα ':name' δεν βρέθηκε",
        'not_found' => [
            'label' => 'Η σελίδα δεν βρέθηκε!',
            'help' => 'Η σελίδα που ζητήσατε δεν μπορεί να βρεθεί.',
        ],
        'custom_error' => [
            'label' => 'Σφάλμα σελίδας',
            'help' => "Σας ζητούμε συγνώμη, αλλά κάτι πήγε λάθος και η σελίδα δεν μπορεί να προβληθεί.",
        ],
        'menu_label' => 'Σελίδες',
        'unsaved_label' => 'Μη αποθηκευμένες σελίδες',
        'no_list_records' => 'Δεν βρέθηκαν σελίδες',
        'new' => 'Νεα Σελιδα',
        'invalid_url' => 'Μη έγκυρη μορφή URL. Η διεύθυνση URL πρέπει να ξεκινήσει με κανονικό slash και μπορεί να περιέχει ψηφία, Λατινικά γράμματα και τα ακόλουθα σύμβολα: ._- [] :? | / + * ^ $',
        'delete_confirm_multiple' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε τις επιλεγμένες σελίδες;',
        'delete_confirm_single' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτήν την σελίδα;',
        'no_layout' => '-- χωρίς διάταξη --',
    ],
    'layout' => [
        'not_found_name' => "The layout ':name' is not found",
        'menu_label' => 'Διατάξεις',
        'unsaved_label' => 'Μη αποθηκευμένες διατάξεις',
        'no_list_records' => 'Δεν βρέθηκε η διάταξη',
        'new' => 'Νέα Διάταξη',
        'delete_confirm_multiple' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε τις επιλεγμένες διατάξεις;',
        'delete_confirm_single' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτήν την διάταξη;',
    ],
    'partial' => [
        'not_found_name' => "Το τμήμα ':name' δεν βρέθηκε.",
        'invalid_name' => 'Μη έγκυρο όνομα τμήματος: :name.',
        'menu_label' => 'Τμήματα',
        'unsaved_label' => 'Μη αποθηκευμένα τμήματα',
        'no_list_records' => 'Δεν βρέθηκαν τμήματα',
        'delete_confirm_multiple' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε τα επιλεγμένα τμήματα;',
        'delete_confirm_single' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτό το τμήμα;',
        'new' => 'Νέο Τμήμα',
    ],
    'content' => [
        'not_found_name' => "Το αρχείο περιεχομένου ':name' δεν βρέθηκε.",
        'menu_label' => 'Περιεχόμενο',
        'unsaved_label' => 'Μη αποθηκευμένο περιεχόμενο',
        'no_list_records' => 'Δεν βρέθηκαν αρχεία περιεχομένου.',
        'delete_confirm_multiple' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε τα επιλεγμένα αρχεία περιχεόμενου ή τους καταλόγους;',
        'delete_confirm_single' => 'Είστε σίγουροι ότι θέλετε να διαγράψετε αυτό το αρχείο περιεχομένου;',
        'new' => 'Νέο Αρχ.Περ.',
    ],
    'ajax_handler' => [
        'invalid_name' => 'Μη έγκυρο όνομα χειριστή AJAX: :name.',
        'not_found' => "Ο χειρίστης AJAX ':name' δεν βρέθηκε.",
    ],
    'cms' => [
        'menu_label' => 'CMS',
    ],
    'sidebar' => [
        'add' => 'Προσθήκη',
        'search' => 'Αναζήτηση...',
    ],
    'editor' => [
        'settings' => 'Ρυθμίσεις',
        'title' => 'Τίτλος',
        'new_title' => 'Νέος τίτλος σελίδας',
        'url' => 'URL',
        'filename' => 'Όνομα Αρχείου',
        'layout' => 'Διάταξη', 
        'description' => 'Περιγραφή',
        'preview' => 'Προεπισκόπηση',
        'meta' => 'Meta',
        'meta_title' => 'Τίτλος Meta',
        'meta_description' => 'Περιγραφή Meta',
        'markup' => 'Markup',
        'code' => 'Κώδικας',
        'content' => 'Περιεχόμενο',
        'hidden' => 'Κρυφό',
        'hidden_comment' => 'Οι κρυφες σελιδες ειναι προσβασημες μονο απο τους συνδεδεμενους back-end χρηστες.',
        'enter_fullscreen' => 'Μεταβαση σε λειτουργια πληρους οθονης',
        'exit_fullscreen' => 'Εξοδος απο την λειτουργια πληρους οθονης',
    ],
    'asset' => [
        'menu_label' => 'Ποροι',
        'unsaved_label' => 'Μη αποθηκευμενοι ποροι',
        'drop_down_add_title' => 'Προσθήκη...',
        'drop_down_operation_title' => 'Ενέργια...',
        'upload_files' => 'Ανέβασμα αρχείου(α)',
        'create_file' => 'Δημιουργία αρχείου',
        'create_directory' => 'Δημιουργία καταλόγου',
        'directory_popup_title' => 'Νέος κατάλογος',
        'directory_name' => 'Όνομα καταλόγου',
        'rename' => 'Μετονομασία',
        'delete' => 'Διαγραφή',
        'move' => 'Μετακίνηση',
        'select' => 'Επιλογή',
        'new' => 'Νέο αρχείο',
        'rename_popup_title' => 'Μετονομασία',
        'rename_new_name' => 'Νέο όνομα',
        'invalid_path' => 'Η διαδρομή μπορεί να περιέχει μόνο ψηφία, Λατινικούς χαρακτήρες, κενά και τα ακόλουθα σύμβολα: ._-/',
        'error_deleting_file' => 'Σφάλμα κατά την διαγραφή του αρχείου :name.',
        'error_deleting_dir_not_empty' => 'Σφάλμα κατά την διαγραφή του καταλόγου :name. Ο κατάλογος δεν είναι άδειος.',
        'error_deleting_dir' => 'Σφάλμα κατά την διαγραφή του καταλόγου :name.',
        'invalid_name' => 'Το όνομα μπορεί να περιέχει μόνο ψηφία, Λατινικούς χαρακτήρες, κενά και τα ακόλουθα σύμβολα: ._-',
        'original_not_found' => 'Το αρχικό αρχείο ή κατάλογος δεν βρέθηκε',
        'already_exists' => 'Το αρχείο ή ο κατάλογος με αυτό το όνομα υπάρχει ήδη',
        'error_renaming' => 'Σφάλμα κατά την μετονομασία του αρχείου ή του καταλόγου',
        'name_cant_be_empty' => 'Το όνομα δεν μπορεί να είναι άδειο',
        'too_large' => 'Το ανεβασμένο αρχείο είναι πολύ μεγάλο. Το μέγιστο επιτρεπόμενο μέγεθος αρχείου είναι :max_size',
        'type_not_allowed' => 'Επιτρέπονται μόνο οι επόμενοι τύποι αρχείων:allowed_types',
        'file_not_valid' => 'Το αρχείο δεν είναι έγκυρο',
        'error_uploading_file' => "Σφάλμα κατά το ανέβασμα του αρχείου ':name': :error",
        'move_please_select' => 'παρακαλούμε επιλέξτε',
        'move_destination' => 'Κατάλογος προορισμού',
        'move_popup_title' => 'Μετακίνηση πόρων',
        'move_button' => 'Μετακίνηση',
        'selected_files_not_found' => 'Τα επιλεγμένα αρχεία δεν βρέθηκαν',
        'select_destination_dir' => 'Παρακαλούμε επιλέξτε έναν κατάλογο προορισμού',
        'destination_not_found' => 'Ο κατάλογος προορισμού δεν βρέθηκε',
        'error_moving_file' => 'Σφάλμα κατά την μετακίνηση του αρχείου :file',
        'error_moving_directory' => 'Σφάλμα κατά την μετακίνηση του καταλόγου :dir',
        'error_deleting_directory' => 'Σφάλμα κατά την διαγραφή του αρχικού καταλόγου :dir',
        'path' => 'Διαδρομή',
    ],
    'component' => [
        'menu_label' => 'Συστατικά',
        'unnamed' => 'Χωρίς Όνομα',
        'no_description' => 'Δεν παρέχεται περιγραφή',
        'alias' => 'Ψευδώνυμο',
        'alias_description' => 'Ένα μοναδικό όνομα δίνεται σε αυτό το συστατικό όταν το χρησιμοποιείτε στον κώδικα της σελίδας ή της διάταξης.',
        'validation_message' => 'Τα ψευδώνυμα των συστατικών είναι υποχρεωτικά και μπορούν να περιέχουν μόνο Λατινικά σύμβολα, αριθμούς, και κάτω παύλες. Τα ψευδώνυμα θα πρέπει να αρχίζουν με ένα λατινικό σύμβολο.',
        'invalid_request' => 'Το πρότυπο δεν μπορεί να σωθεί λόγω των μη έγκυρων δεδομένων του συστατικού.',
        'no_records' => 'Δεν βρέθηκαν συστατικά',
        'not_found' => "Το συστατικό ':name' δεν βρέθηκε.",
        'method_not_found' => "Το συστατικό ':name' δεν περιέχει την μέθοδο ':method'.",
    ],
    'template' => [
        'invalid_type' => 'Άγνωστος τύπος προτύπου.',
        'not_found' => 'Το ζητούμενο πρότυπο δεν βρέθηκε.',
        'saved'=> 'Το πρότυπο έχει σωθεί επιτυχώς.',
    ],
    'permissions' => [
        'name' => 'Cms',
        'manage_content' => 'Διαχείριση περιεχομένου',
        'manage_assets' => 'Διαχείριση πόρων',
        'manage_pages' => 'Διαχείριση σελίδων',
        'manage_layouts' => 'Διαχείριση διατάξεων',
        'manage_partials' => 'Διαχείριση τμημάτων',
        'manage_themes' => 'Διαχείριση θεμάτων',
        'manage_media' => 'Διαχείριση μέσων'
    ],
    'media' => [
        'invalid_path' => "Ορίστηκε μη έγκυρη διαδρομή αρχείου : ':path'.",
        'menu_label' => 'Μέσα',
        'upload' => 'Ανέβασμα',
        'move' => 'Μετακίνηση',
        'delete' => 'Διαγραφή',
        'add_folder' => 'Προσθήκη καταλόγου',
        'search' => 'Αναζήτηση',
        'display' => 'Εμφάνιση',
        'filter_everything' => 'Όλα',
        'filter_images' => 'Εικόνες',
        'filter_video' => 'Βίντεο',
        'filter_audio' => 'Ήχος',
        'filter_documents' => 'Έγγραφο',
        'library' => 'Βιβλιοθήκη',
        'folder_size_items' => 'αντικείμενο(α)',
        'size' => 'Μέγεθος',
        'title' => 'Τίτλος',
        'last_modified' => 'Τελευταία τροποποίηση',
        'public_url' => 'Δημόσιο URL',
        'click_here' => 'Κλικ εδώ',
        'thumbnail_error' => 'Σφάλμα κατά την δημιουργία μικρογραφίας.',
        'return_to_parent' => 'Επιστροφή στον γονικό κατάλογο',
        'return_to_parent_label' => 'Πήγαινε επάνω...',
        'nothing_selected' => 'Δεν επιλέχτηκε τίποτα.',
        'multiple_selected' => 'Επιλέχτηκαν πολλαπλά αντικείμενα.',
        'uploading_file_num' => 'Ανέβασμα :number αρχείων...',
        'uploading_complete' => 'Το ανέβασμα ολοκληρώθηκε',
        'order_by' => 'Ταξινόμηση κατά',
        'search' => 'Αναζήτηση',
        'folder' => 'Κατάλογος',
        'no_files_found' => 'Δεν βρέθηκαν αρχεία από το αίτημα σας.',
        'delete_empty' => 'παρακαλούμε επιλέξτε αντικείμενά για να τα σβήσετε.',
        'delete_confirm' => 'Είστε σίγουροι ότι θέλετε να σβήσετε τα επιλεγμένα αντικείμενα;',
        'error_renaming_file' => 'Σφάλμα κατά την μετονομασία του αντικειμένου.',
        'new_folder_title' => 'Νέος κατάλογος',
        'folder_name' => 'Όνομα καταλόγου',
        'error_creating_folder' => 'Σφάλμα κατά την δημιουργία καταλόγου',
        'folder_or_file_exist' => 'Ένας κατάλογος ή αρχείο με το ίδιο όνομα υπάρχει ήδη.',
        'move_empty' => 'παρακαλούμε επιλέξτε αντικείμενα για να τα μετακινήσετε.',
        'move_popup_title' => 'Μετακίνηση αρχείων ή καταλογών.',
        'move_destination' => 'Κατάλογος προορισμού',
        'please_select_move_dest' => 'Παρακαλούμε επιλέξτε ένα κατάλογο προορισμού.',
        'move_dest_src_match' => 'Παρακαλούμε επιλέξτε έναν διαφορετικό κατάλογο προορισμού.',
        'empty_library' => 'Η βιβλιοθήκη Μέσων είναι άδεια. Ανεβάστε αρχεία ή δημιουργήστε καταλόγους για να ξεκινήσετε.',
        'insert' => 'Εισαγωγή',
        'crop_and_insert' => 'Περικοπή & Εισαγωγή',
        'select_single_image' => 'παρακαλούμε επιλέξτε μόνο μια εικόνα.',
        'selection_not_image' => 'Το επιλεγμένο αντικείμενο δεν είναι εικόνα.',
        'restore' => 'Αναίρεση όλων των αλλαγών',
        'resize' => 'Αλλαγή μεγέθους...',
        'selection_mode_normal' => 'Κανονικό',
        'selection_mode_fixed_ratio' => 'Κλειδωμένη αναλογία',
        'selection_mode_fixed_size' => 'Κλειδωμένο μέγεθος',
        'height' => 'Ύψος',
        'width' => 'Πλάτος',
        'selection_mode' => 'Λειτουργία επιλογής',
        'resize_image' => 'Αλλαγή μεγέθους εικόνας',
        'image_size' => 'Μέγεθος εικόνας:',
        'selected_size' => 'Επιλεγμένο:',
    ]
];
